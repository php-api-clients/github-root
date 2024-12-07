<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Codespaces;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;
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

final class GetRepoSecret
{
    public const OPERATION_ID    = 'codespaces/get-repo-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(private SchemaValidator $responseSchemaValidator, private SecretName $hydrator, string $owner, string $repo, string $secretName)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->secretName              = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/codespaces/secrets/{secret_name}'))->expand(['owner' => $this->owner, 'repo' => $this->repo, 'secret_name' => $this->secretName]));
    }

    public function createResponse(ResponseInterface $response): RepoCodespacesSecret
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(RepoCodespacesSecret::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(RepoCodespacesSecret::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
