<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\PageBuildStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RequestPagesBuild
{
    public const OPERATION_ID    = 'repos/request-pages-build';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pages/builds';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pages\Builds $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): PageBuildStatus|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Repos\RequestPagesBuild($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PageBuildStatus|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
