<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Apps;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\MarketplacePurchase;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSubscriptionPlanForAccountStubbed
{
    public const OPERATION_ID    = 'apps/get-subscription-plan-for-account-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/accounts/{account_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId $hydrator)
    {
    }

    /** @return */
    public function call(int $accountId): MarketplacePurchase|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Apps\GetSubscriptionPlanForAccountStubbed($this->responseSchemaValidator, $this->hydrator, $accountId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): MarketplacePurchase|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
