<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Checks;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest;
use ApiClients\Client\GitHub\Schema\EmptyObject;
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

final class RerequestSuite
{
    public const OPERATION_ID    = 'checks/rerequest-suite';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the check suite. **/
    private int $checkSuiteId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Rerequest $hydrator, string $owner, string $repo, int $checkSuiteId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->checkSuiteId            = $checkSuiteId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest'))->expand(['check_suite_id' => $this->checkSuiteId, 'owner' => $this->owner, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): EmptyObject
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(EmptyObject::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(EmptyObject::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
