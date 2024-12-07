<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Billing;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
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

final class GetSharedStorageBillingUser
{
    public const OPERATION_ID    = 'billing/get-shared-storage-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/shared-storage';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private SchemaValidator $responseSchemaValidator, private SharedStorage $hydrator, string $username)
    {
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/users/{username}/settings/billing/shared-storage'))->expand(['username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): CombinedBillingUsage
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CombinedBillingUsage::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CombinedBillingUsage::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
