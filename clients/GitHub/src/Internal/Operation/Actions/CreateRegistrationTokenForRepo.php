<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
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

final class CreateRegistrationTokenForRepo
{
    public const OPERATION_ID    = 'actions/create-registration-token-for-repo';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runners/registration-token';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RegistrationToken $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/runners/registration-token'))->expand(['owner' => $this->owner, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): AuthenticationToken
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
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(AuthenticationToken::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(AuthenticationToken::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
