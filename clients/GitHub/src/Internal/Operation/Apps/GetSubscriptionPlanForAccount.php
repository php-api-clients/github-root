<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Apps;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
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

final class GetSubscriptionPlanForAccount
{
    public const OPERATION_ID    = 'apps/get-subscription-plan-for-account';
    public const OPERATION_MATCH = 'GET /marketplace_listing/accounts/{account_id}';
    /**account_id parameter **/
    private int $accountId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private AccountId $hydrator, int $accountId)
    {
        $this->accountId               = $accountId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/marketplace_listing/accounts/{account_id}'))->expand(['account_id' => $this->accountId]));
    }

    public function createResponse(ResponseInterface $response): MarketplacePurchase
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(MarketplacePurchase::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(MarketplacePurchase::class, $body);
                    /**
                     * Not Found when the account has not purchased the listing
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(401, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
