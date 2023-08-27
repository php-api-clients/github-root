<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAuthorization
{
    public const OPERATION_ID    = 'oauth-authorizations/get-authorization';
    public const OPERATION_MATCH = 'GET /authorizations/{authorization_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Authorizations\AuthorizationId $hydrator)
    {
    }

    /** @return Schema\Authorization|array{code:int} */
    public function call(int $authorizationId): Authorization|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\GetAuthorization($this->responseSchemaValidator, $this->hydrator, $authorizationId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
