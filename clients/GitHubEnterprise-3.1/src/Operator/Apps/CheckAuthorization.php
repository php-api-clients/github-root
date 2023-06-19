<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Apps;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CheckAuthorization
{
    public const OPERATION_ID    = 'apps/check-authorization';
    public const OPERATION_MATCH = 'GET /applications/{client_id}/tokens/{access_token}';
    private const METHOD         = 'GET';
    private const PATH           = '/applications/{client_id}/tokens/{access_token}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Applications\ClientId\Tokens\AccessToken $hydrator)
    {
    }

    /** @return PromiseInterface<Authorization> **/
    public function call(string $clientId, string $accessToken): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Apps\CheckAuthorization($this->responseSchemaValidator, $this->hydrator, $clientId, $accessToken);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }
}
