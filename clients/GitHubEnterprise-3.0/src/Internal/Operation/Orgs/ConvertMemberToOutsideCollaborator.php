<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs;

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

final class ConvertMemberToOutsideCollaborator
{
    public const OPERATION_ID    = 'orgs/convert-member-to-outside-collaborator';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/outside_collaborators/{username}';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username $hydrator, private string $org, private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/outside_collaborators/{username}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * User is getting converted asynchronously
                     **/
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json::class, $body);
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
             * User was converted
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Forbidden if user is the last owner of the organization or not a member of the organization
             **/

            case 403:
                return new WithoutBody(403, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
