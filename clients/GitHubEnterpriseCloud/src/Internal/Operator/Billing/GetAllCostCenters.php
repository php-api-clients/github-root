<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Billing;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllCostCenters
{
    public const OPERATION_ID    = 'billing/get-all-cost-centers';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/settings/billing/cost-centers';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\CostCenters $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing\GetAllCostCenters($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
