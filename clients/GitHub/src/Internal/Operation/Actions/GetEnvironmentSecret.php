<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName;
use ApiClients\Client\GitHub\Schema\ActionsSecret;
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

final class GetEnvironmentSecret
{
    public const OPERATION_ID    = 'actions/get-environment-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(private SchemaValidator $responseSchemaValidator, private SecretName $hydrator, string $owner, string $repo, string $environmentName, string $secretName)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->environmentName         = $environmentName;
        $this->secretName              = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/environments/{environment_name}/secrets/{secret_name}'))->expand(['environment_name' => $this->environmentName, 'owner' => $this->owner, 'repo' => $this->repo, 'secret_name' => $this->secretName]));
    }

    public function createResponse(ResponseInterface $response): ActionsSecret
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ActionsSecret::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ActionsSecret::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
