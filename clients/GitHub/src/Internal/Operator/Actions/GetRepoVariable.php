<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRepoVariable
{
    public const OPERATION_ID    = 'actions/get-repo-variable';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $name): ActionsVariable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\GetRepoVariable($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $name);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsVariable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
