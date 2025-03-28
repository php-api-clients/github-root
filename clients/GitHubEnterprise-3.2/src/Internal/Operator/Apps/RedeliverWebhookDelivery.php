<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Apps;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RedeliverWebhookDelivery
{
    public const OPERATION_ID    = 'apps/redeliver-webhook-delivery';
    public const OPERATION_MATCH = 'POST /app/hook/deliveries/{delivery_id}/attempts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts $hydrator)
    {
    }

    /** @return */
    public function call(int $deliveryId): Accepted
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Apps\RedeliverWebhookDelivery($this->responseSchemaValidator, $this->hydrator, $deliveryId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Accepted {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
