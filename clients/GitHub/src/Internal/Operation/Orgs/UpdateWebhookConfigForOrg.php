<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config;
use ApiClients\Client\GitHub\Schema\Orgs\UpdateWebhookConfigForOrg\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
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
use function json_encode;

final class UpdateWebhookConfigForOrg
{
    public const OPERATION_ID    = 'orgs/update-webhook-config-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/hooks/{hook_id}/config';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the hook. You can find this value in the `X-GitHub-Hook-ID` header of a webhook delivery. **/
    private int $hookId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Config $hydrator, string $org, int $hookId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->hookId                  = $hookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PATCH', (string) (new UriTemplate('/orgs/{org}/hooks/{hook_id}/config'))->expand(['hook_id' => $this->hookId, 'org' => $this->org]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WebhookConfig
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(WebhookConfig::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(WebhookConfig::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
