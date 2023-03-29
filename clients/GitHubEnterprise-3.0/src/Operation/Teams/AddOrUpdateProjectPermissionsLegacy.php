<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class AddOrUpdateProjectPermissionsLegacy
{
    public const OPERATION_ID = 'teams/add-or-update-project-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/projects/{project_id}';
    private const METHOD = 'PUT';
    private const PATH = '/teams/{team_id}/projects/{project_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private int $teamId;
    private int $projectId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $hydrator, int $teamId, int $projectId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->teamId = $teamId;
        $this->projectId = $projectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Teams\AddOrUpdateProjectPermissionsLegacy\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{project_id}'), array($this->teamId, $this->projectId), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : void
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden if the project is not owned by the organization**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Teams\AddOrUpdateProjectPermissionsLegacy\Response\Applicationjson\H403::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\Teams\AddOrUpdateProjectPermissionsLegacy\Response\Applicationjson\H403(403, $this->hydrator->hydrateObject(Schema\Operation\Teams\AddOrUpdateProjectPermissionsLegacy\Response\Applicationjson\H403::class, $body));
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Validation failed**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
