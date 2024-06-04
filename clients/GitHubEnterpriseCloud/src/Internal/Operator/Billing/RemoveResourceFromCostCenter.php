<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Billing;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveResourceFromCostCenter
{
    public const OPERATION_ID    = 'billing/remove-resource-from-cost-center';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/settings/billing/cost-centers/{cost_center_id}/resource';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\CostCenters\CostCenterId\Resource $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, string $costCenterId, array $params): Json
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Billing\RemoveResourceFromCostCenter($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise, $costCenterId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
