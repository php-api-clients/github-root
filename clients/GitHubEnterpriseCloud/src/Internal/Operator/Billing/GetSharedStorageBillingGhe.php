<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Billing;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSharedStorageBillingGhe
{
    public const OPERATION_ID    = 'billing/get-shared-storage-billing-ghe';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/settings/billing/shared-storage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\SharedStorage $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise): CombinedBillingUsage
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing\GetSharedStorageBillingGhe($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedBillingUsage {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
