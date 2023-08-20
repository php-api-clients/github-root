<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Search;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Labels
{
    public const OPERATION_ID    = 'search/labels';
    public const OPERATION_MATCH = 'GET /search/labels';
    private const METHOD         = 'GET';
    private const PATH           = '/search/labels';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Search\Labels $hydrator)
    {
    }

    /** @return (Schema\Operations\Search\Labels\Response\ApplicationJson\Ok | array{code: int}) */
    public function call(int $repositoryId, string $q, string $sort, string $order = 'desc', int $perPage = 30, int $page = 1): Ok|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Search\Labels($this->responseSchemaValidator, $this->hydrator, $repositoryId, $q, $sort, $order, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
