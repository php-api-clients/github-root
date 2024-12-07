<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Activity;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Notifications\Threads\ThreadId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class MarkThreadAsRead
{
    public const OPERATION_ID    = 'activity/mark-thread-as-read';
    public const OPERATION_MATCH = 'PATCH /notifications/threads/{thread_id}';
    /**The unique identifier of the notification thread. This corresponds to the value returned in the `id` field when you retrieve notifications (for example with the [`GET /notifications` operation](https://docs.github.com/rest/activity/notifications#list-notifications-for-the-authenticated-user)). **/
    private int $threadId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private ThreadId $hydrator, int $threadId)
    {
        $this->threadId                = $threadId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PATCH', (string) (new UriTemplate('/notifications/threads/{thread_id}'))->expand(['thread_id' => $this->threadId]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Forbidden
                     **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Reset Content
             **/
            case 205:
                return new WithoutBody(205, []);
            /**
             * Not modified
             **/

            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
