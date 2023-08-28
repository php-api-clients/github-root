<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryCollaboratorPermission;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCollaboratorPermissionLevel
{
    public const OPERATION_ID    = 'repos/get-collaborator-permission-level';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/collaborators/{username}/permission';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission $hydrator)
    {
    }

    /** @return Schema\RepositoryCollaboratorPermission */
    public function call(string $owner, string $repo, string $username): RepositoryCollaboratorPermission|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos\GetCollaboratorPermissionLevel($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryCollaboratorPermission|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
