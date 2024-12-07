<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;

final class UploadReleaseAsset
{
    public const OPERATION_ID    = 'repos/upload-release-asset';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/releases/{release_id}/assets';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the release. **/
    private int $releaseId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Assets $hydrator, string $owner, string $repo, int $releaseId, private string $name, private string $label)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->releaseId               = $releaseId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationOctetStream::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/releases/{release_id}/assets{?label,name}'))->expand(['label' => $this->label, 'name' => $this->name, 'owner' => $this->owner, 'release_id' => $this->releaseId, 'repo' => $this->repo]), ['Content-Type' => 'application/octet-stream'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ReleaseAsset|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response for successful upload
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ReleaseAsset::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ReleaseAsset::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if you upload an asset with the same filename as another uploaded asset
             **/
            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
