<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\HookDelivery;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Request
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"headers":[],"payload":[]}';
    /**
     * The request headers sent with the webhook delivery.
     */
    public ?Schema\HookDelivery\Request\Headers $headers;
    /**
     * The webhook payload.
     */
    public ?Schema\HookDelivery\Request\Payload $payload;
    public function __construct(Schema\HookDelivery\Request\Headers $headers, Schema\HookDelivery\Request\Payload $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }
}
