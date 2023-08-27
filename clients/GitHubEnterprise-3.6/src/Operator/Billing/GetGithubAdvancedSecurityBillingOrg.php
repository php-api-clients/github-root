<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Billing;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubAdvancedSecurityBillingOrg
{
    public const OPERATION_ID    = 'billing/get-github-advanced-security-billing-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/settings/billing/advanced-security';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Settings\Billing\AdvancedSecurity $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $perPage = 30, int $page = 1): AdvancedSecurityActiveCommitters|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Billing\GetGithubAdvancedSecurityBillingOrg($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AdvancedSecurityActiveCommitters|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
