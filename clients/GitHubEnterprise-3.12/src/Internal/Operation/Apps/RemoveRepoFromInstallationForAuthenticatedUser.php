<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Apps;

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

final class RemoveRepoFromInstallationForAuthenticatedUser
{
    public const OPERATION_ID    = 'apps/remove-repo-from-installation-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/installations/{installation_id}/repositories/{repository_id}';
    /**The unique identifier of the installation. **/
    private int $installationId;
    /**The unique identifier of the repository. **/
    private int $repositoryId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId $hydrator, int $installationId, int $repositoryId)
    {
        $this->installationId = $installationId;
        $this->repositoryId   = $repositoryId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{installation_id}', '{repository_id}'], [$this->installationId, $this->repositoryId], '/user/installations/{installation_id}/repositories/{repository_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Forbidden
                     **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Not modified
             **/

            case 304:
                return new WithoutBody(304, []);
            /**
             * Returned when the application is installed on `all` repositories in the organization, or if this request would remove the last repository that the application has access to in the organization.
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
