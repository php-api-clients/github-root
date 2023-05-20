<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteAuthorization
{
    public const OPERATION_ID    = 'oauth-authorizations/delete-authorization';
    public const OPERATION_MATCH = 'DELETE /authorizations/{authorization_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/authorizations/{authorization_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Authorizations\AuthorizationId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $authorizationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\DeleteAuthorization($this->responseSchemaValidator, $this->hydrator, $authorizationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
