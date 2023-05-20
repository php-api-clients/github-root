<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Apps;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\MarketplacePurchase;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSubscriptionPlanForAccountStubbed
{
    public const OPERATION_ID    = 'apps/get-subscription-plan-for-account-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/accounts/{account_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/marketplace_listing/stubbed/accounts/{account_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(MarketplacePurchase|array)>
     **/
    public function call(int $accountId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Apps\GetSubscriptionPlanForAccountStubbed($this->responseSchemaValidator, $this->hydrator, $accountId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): MarketplacePurchase|array {
            return $operation->createResponse($response);
        });
    }
}
