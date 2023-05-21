<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateImpersonationOAuthToken
{
    public const OPERATION_ID    = 'enterprise-admin/create-impersonation-o-auth-token';
    public const OPERATION_MATCH = 'POST /admin/users/{username}/authorizations';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/users/{username}/authorizations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\Users\Username\Authorizations $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Authorization>
     **/
    public function call(string $username, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }
}
