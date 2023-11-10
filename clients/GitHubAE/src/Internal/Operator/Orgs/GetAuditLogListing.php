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

final readonly class GetAuditLogListing
{
    public const OPERATION_ID    = 'orgs/get-audit-log';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/audit-log';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\AuditLog $hydrator)
    {
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function call(string $org, string $phrase, string $after, string $before, string $order, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Orgs\GetAuditLogListing($this->responseSchemaValidator, $this->hydrator, $org, $phrase, $after, $before, $order, $perPage, $page);
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
