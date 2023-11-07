<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetWebhookConfigForOrg
{
    public const OPERATION_ID    = 'orgs/get-webhook-config-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}/config';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $hydrator, private string $org, private int $hookId)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{hook_id}'], [$this->org, $this->hookId], '/orgs/{org}/hooks/{hook_id}/config'));
    }

    public function createResponse(ResponseInterface $response): Schema\WebhookConfig
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WebhookConfig::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WebhookConfig::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
