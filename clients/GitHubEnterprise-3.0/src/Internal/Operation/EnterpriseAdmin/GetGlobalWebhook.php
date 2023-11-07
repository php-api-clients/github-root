<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

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

final class GetGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/get-global-webhook';
    public const OPERATION_MATCH = 'GET /admin/hooks/{hook_id}';
    /**This API is under preview and subject to change. **/
    private string $accept;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Admin\Hooks\HookId $hydrator, private int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->accept = $accept;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{hook_id}'], [$this->hookId], '/admin/hooks/{hook_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\GlobalHook
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GlobalHook::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GlobalHook::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
