<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteAuthorization
{
    public const OPERATION_ID    = 'oauth-authorizations/delete-authorization';
    public const OPERATION_MATCH = 'DELETE /authorizations/{authorization_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Authorizations\AuthorizationId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(int $authorizationId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\DeleteAuthorization($this->responseSchemaValidator, $this->hydrator, $authorizationId);
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
