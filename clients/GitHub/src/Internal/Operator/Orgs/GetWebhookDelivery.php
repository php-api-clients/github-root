<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetWebhookDelivery
{
    public const OPERATION_ID    = 'orgs/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $hookId, int $deliveryId): HookDelivery
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\GetWebhookDelivery($this->responseSchemaValidator, $this->hydrator, $org, $hookId, $deliveryId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): HookDelivery {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
