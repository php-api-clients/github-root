<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Activity;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class MarkThreadAsDone
{
    public const OPERATION_ID    = 'activity/mark-thread-as-done';
    public const OPERATION_MATCH = 'DELETE /notifications/threads/{thread_id}';
    /**The unique identifier of the notification thread. This corresponds to the value returned in the `id` field when you retrieve notifications (for example with the [`GET /notifications` operation](https://docs.github.com/rest/activity/notifications#list-notifications-for-the-authenticated-user)). **/
    private int $threadId;

    public function __construct(int $threadId)
    {
        $this->threadId = $threadId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/notifications/threads/{thread_id}'))->expand(['thread_id' => $this->threadId]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * No content
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
