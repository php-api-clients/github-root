<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\OauthAuthorizations;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGrant
{
    public const OPERATION_ID    = 'oauth-authorizations/get-grant';
    public const OPERATION_MATCH = 'GET /applications/grants/{grant_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/applications/grants/{grant_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Applications\Grants\GrantId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(ApplicationGrant|array)>
     **/
    public function call(int $grantId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations\GetGrant($this->responseSchemaValidator, $this->hydrator, $grantId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ApplicationGrant|array {
            return $operation->createResponse($response);
        });
    }
}
