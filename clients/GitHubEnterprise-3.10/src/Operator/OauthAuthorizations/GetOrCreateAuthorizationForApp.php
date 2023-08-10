<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOrCreateAuthorizationForApp
{
    public const OPERATION_ID    = 'oauth-authorizations/get-or-create-authorization-for-app';
    public const OPERATION_MATCH = 'PUT /authorizations/clients/{client_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/authorizations/clients/{client_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Authorizations\Clients\ClientId $hydrator)
    {
    }

    /** @return PromiseInterface<Authorization|array> **/
    public function call(string $clientId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $clientId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization|array {
            return $operation->createResponse($response);
        });
    }
}
