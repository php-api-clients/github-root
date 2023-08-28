<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Issues;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\Label;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetLabel
{
    public const OPERATION_ID    = 'issues/get-label';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/labels/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name $hydrator)
    {
    }

    /** @return Schema\Label */
    public function call(string $owner, string $repo, string $name): Label|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Issues\GetLabel($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $name);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Label|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
