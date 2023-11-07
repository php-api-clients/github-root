<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPublic
{
    public const OPERATION_ID    = 'repos/list-public';
    public const OPERATION_MATCH = 'GET /repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repositories $hydrator)
    {
    }

    /** @return iterable<int,Schema\MinimalRepository>|WithoutBody */
    public function call(int $since, string $visibility = 'public'): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos\ListPublic($this->responseSchemaValidator, $this->hydrator, $since, $visibility);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
