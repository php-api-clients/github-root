<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/get-environment-variable';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The name of the variable. **/
    private string $name;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name $hydrator, string $owner, string $repo, string $environmentName, string $name)
    {
        $this->owner           = $owner;
        $this->repo            = $repo;
        $this->environmentName = $environmentName;
        $this->name            = $name;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{environment_name}', '{name}'], [$this->owner, $this->repo, $this->environmentName, $this->name], '/repos/{owner}/{repo}/environments/{environment_name}/variables/{name}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsVariable
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsVariable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsVariable::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
