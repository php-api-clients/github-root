<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteGrant
{
    public const OPERATION_ID    = 'oauth-authorizations/delete-grant';
    public const OPERATION_MATCH = 'DELETE /applications/grants/{grant_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/applications/grants/{grant_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Applications\Grants\GrantId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $grantId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\DeleteGrant($this->responseSchemaValidator, $this->hydrator, $grantId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
