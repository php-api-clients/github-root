<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Billing;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubAdvancedSecurityBillingGhe
{
    public const OPERATION_ID    = 'billing/get-github-advanced-security-billing-ghe';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/settings/billing/advanced-security';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\AdvancedSecurity $hydrator)
    {
    }

    public function call(string $enterprise, int $perPage = 30, int $page = 1): AdvancedSecurityActiveCommitters
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing\GetGithubAdvancedSecurityBillingGhe($this->responseSchemaValidator, $this->hydrator, $enterprise, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AdvancedSecurityActiveCommitters {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
