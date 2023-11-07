<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Activity;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class MarkRepoNotificationsAsRead
{
    public const OPERATION_ID    = 'activity/mark-repo-notifications-as-read';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/notifications';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications $hydrator, private string $owner, private string $repo)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/notifications'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
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
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Reset Content
             **/
            case 205:
                return new WithoutBody(205, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
