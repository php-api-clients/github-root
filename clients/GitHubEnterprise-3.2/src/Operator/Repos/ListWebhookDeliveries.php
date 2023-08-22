<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListWebhookDeliveries
{
    public const OPERATION_ID    = 'repos/list-webhook-deliveries';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries $hydrator)
    {
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function call(string $owner, string $repo, int $hookId, string $cursor, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Repos\ListWebhookDeliveries($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $hookId, $cursor, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
