<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListGlobalWebhooks
{
    public const OPERATION_ID    = 'enterprise-admin/list-global-webhooks';
    public const OPERATION_MATCH = 'GET /admin/hooks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Admin\Hooks $hydrator)
    {
    }

    /** @return iterable<int,Schema\GlobalHook> */
    public function call(int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\ListGlobalWebhooks($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
