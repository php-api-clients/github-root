<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

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

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets $hydrator, string $owner, string $repo, int $releaseId, private string $name, private string $label)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->releaseId = $releaseId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{owner}', '{repo}', '{release_id}', '{name}', '{label}'], [$this->owner, $this->repo, $this->releaseId, $this->name, $this->label], '/repos/{owner}/{repo}/releases/{release_id}/assets' . '?name={name}&label={label}'), ['Content-Type' => 'application/octet-stream'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\ReleaseAsset|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReleaseAsset::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ReleaseAsset::class, $body);
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
