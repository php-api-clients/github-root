<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetReleaseAsset
{
    public const OPERATION_ID    = 'repos/get-release-asset';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/assets/{asset_id}';
    /**asset_id parameter **/
    private int $assetId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId $hydrator, private string $owner, private string $repo, int $assetId)
    {
        $this->assetId = $assetId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{asset_id}'], [$this->owner, $this->repo, $this->assetId], '/repos/{owner}/{repo}/releases/assets/{asset_id}'));
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
                     * To download the asset's binary content, set the `Accept` header of the request to [`application/octet-stream`](https://docs.github.com/enterprise-server@3.0/rest/overview/media-types). The API will either redirect the client to the location, or stream it directly if possible. API clients should handle both a `200` or `302` response.
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReleaseAsset::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ReleaseAsset::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Preview header missing
                     **/

                    case 415:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Apps\GetInstallation\Response\ApplicationJson\UnsupportedMediaType::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\Apps\GetInstallation\Response\ApplicationJson\UnsupportedMediaType(415, $this->hydrator->hydrateObject(Schema\Operations\Apps\GetInstallation\Response\ApplicationJson\UnsupportedMediaType::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Found
             **/
            case 302:
                return new WithoutBody(302, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
