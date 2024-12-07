<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Billing;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
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

final class GetGithubActionsBillingUser
{
    public const OPERATION_ID    = 'billing/get-github-actions-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/actions';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Actions $hydrator, string $username)
    {
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/users/{username}/settings/billing/actions'))->expand(['username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): ActionsBillingUsage
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ActionsBillingUsage::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ActionsBillingUsage::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
