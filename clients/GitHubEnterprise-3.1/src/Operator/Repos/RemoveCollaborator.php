<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveCollaborator
{
    public const OPERATION_ID    = 'repos/remove-collaborator';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/collaborators/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/collaborators/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, string $username): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Repos\RemoveCollaborator($owner, $repo, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
