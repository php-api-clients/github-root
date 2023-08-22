<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Users;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\PrivateUser;
use ApiClients\Client\GitHubEnterprise\Schema\PublicUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetByUsername
{
    public const OPERATION_ID    = 'users/get-by-username';
    public const OPERATION_MATCH = 'GET /users/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username $hydrator)
    {
    }

    /** @return */
    public function call(string $username): PrivateUser|PublicUser|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Users\GetByUsername($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PrivateUser|PublicUser|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
