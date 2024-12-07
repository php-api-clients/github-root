<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\ScimError;
use ApiClients\Client\GitHub\Schema\ValidationError;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetWebhookDelivery
{
    public const OPERATION_ID    = 'orgs/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the hook. You can find this value in the `X-GitHub-Hook-ID` header of a webhook delivery. **/
    private int $hookId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private DeliveryId $hydrator, string $org, int $hookId, private int $deliveryId)
    {
        $this->org                     = $org;
        $this->hookId                  = $hookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}'))->expand(['delivery_id' => $this->deliveryId, 'hook_id' => $this->hookId, 'org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): HookDelivery
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(HookDelivery::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(HookDelivery::class, $body);
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(400, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ValidationError(422, $this->hydrator->hydrateObject(ValidationError::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad Request
                     **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ScimError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ScimError(400, $this->hydrator->hydrateObject(ScimError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
