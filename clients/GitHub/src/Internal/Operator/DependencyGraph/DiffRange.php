<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\DependencyGraph;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DiffRange
{
    public const OPERATION_ID    = 'dependency-graph/diff-range';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Basehead $hydrator)
    {
    }

    /** @return Observable<DependencyGraphDiff> */
    public function call(string $owner, string $repo, string $basehead, string $name): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\DependencyGraph\DiffRange($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $basehead, $name);
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
