<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class CreateOrUpdateRepoSecret
{
    public const OPERATION_ID = 'actions/create-or-update-repo-secret';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}';
    private const METHOD = 'PUT';
    private const PATH = '/repos/{owner}/{repo}/actions/secrets/{secret_name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $hydrator, string $owner, string $repo, string $secret_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Actions\CreateOrUpdateRepoSecret\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response when creating a secret**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
