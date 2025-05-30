<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
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

final class UpdateReleaseAsset
{
    public const OPERATION_ID    = 'repos/update-release-asset';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the asset. **/
    private int $assetId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId $hydrator, string $owner, string $repo, int $assetId)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->assetId = $assetId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\UpdateReleaseAsset\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{owner}', '{repo}', '{asset_id}'], [$this->owner, $this->repo, $this->assetId], '/repos/{owner}/{repo}/releases/assets/{asset_id}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\ReleaseAsset
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReleaseAsset::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ReleaseAsset::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
