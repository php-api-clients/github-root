<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Apps;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetSubscriptionPlanForAccount
{
    public const OPERATION_ID    = 'apps/get-subscription-plan-for-account';
    public const OPERATION_MATCH = 'GET /marketplace_listing/accounts/{account_id}';
    /**account_id parameter **/
    private int $accountId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId $hydrator, int $accountId)
    {
        $this->accountId = $accountId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{account_id}'], [$this->accountId], '/marketplace_listing/accounts/{account_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\MarketplacePurchase
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MarketplacePurchase::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\MarketplacePurchase::class, $body);
                    /**
                     * Not Found when the account has not purchased the listing
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
