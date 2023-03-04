<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Response
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":[],"payload":"generated_payload"}';
    /**
     * The response headers received when the delivery was made.
     */
    public ?Schema\HookDelivery\Response\Headers $headers;
    /**
     * The response payload received.
     */
    public ?string $payload;
    public function __construct(Schema\HookDelivery\Response\Headers $headers, string $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
