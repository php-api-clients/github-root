<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRepoRulesets
{
    public const OPERATION_ID    = 'repos/get-repo-rulesets';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/rulesets';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets $hydrator)
    {
    }

    /** @return Observable<Schema\RepositoryRuleset> */
    public function call(string $owner, string $repo, string $targets, int $perPage = 30, int $page = 1, bool $includesParents = true): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\GetRepoRulesets($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $targets, $perPage, $page, $includesParents);
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
