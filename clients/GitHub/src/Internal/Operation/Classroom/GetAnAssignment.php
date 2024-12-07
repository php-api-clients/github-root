<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Classroom;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Assignments\AssignmentId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;
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

final class GetAnAssignment
{
    public const OPERATION_ID    = 'classroom/get-an-assignment';
    public const OPERATION_MATCH = 'GET /assignments/{assignment_id}';
    /**The unique identifier of the classroom assignment. **/
    private int $assignmentId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private AssignmentId $hydrator, int $assignmentId)
    {
        $this->assignmentId            = $assignmentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/assignments/{assignment_id}'))->expand(['assignment_id' => $this->assignmentId]));
    }

    public function createResponse(ResponseInterface $response): ClassroomAssignment
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ClassroomAssignment::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ClassroomAssignment::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
