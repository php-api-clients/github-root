<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Orgs;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListWebhooksListing
{
    public const OPERATION_ID    = 'orgs/list-webhooks';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/hooks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Hooks $hydrator)
    {
    }

    /** @return Observable<Schema\OrgHook> */
    public function call(string $org, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Orgs\ListWebhooksListing($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
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
