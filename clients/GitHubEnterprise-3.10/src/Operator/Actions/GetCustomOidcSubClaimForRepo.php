<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSubRepo;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCustomOidcSubClaimForRepo
{
    public const OPERATION_ID    = 'actions/get-custom-oidc-sub-claim-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/oidc/customization/sub';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/oidc/customization/sub';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub $hydrator)
    {
    }

    /** @return PromiseInterface<OidcCustomSubRepo> **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\GetCustomOidcSubClaimForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OidcCustomSubRepo {
            return $operation->createResponse($response);
        });
    }
}
