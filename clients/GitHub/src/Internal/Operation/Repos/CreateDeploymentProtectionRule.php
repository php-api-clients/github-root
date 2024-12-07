<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Schema\Repos\CreateDeploymentProtectionRule\Request\ApplicationJson;
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

final class CreateDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/create-deployment-protection-rule';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private DeploymentProtectionRules $hydrator, string $environmentName, string $repo, string $owner)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->environmentName         = $environmentName;
        $this->repo                    = $repo;
        $this->owner                   = $owner;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules'))->expand(['environment_name' => $this->environmentName, 'owner' => $this->owner, 'repo' => $this->repo]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): DeploymentProtectionRule
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * The enabled custom deployment protection rule
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(DeploymentProtectionRule::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(DeploymentProtectionRule::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
