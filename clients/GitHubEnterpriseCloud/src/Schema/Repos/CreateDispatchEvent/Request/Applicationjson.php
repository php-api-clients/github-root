<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Repos\CreateDispatchEvent\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name. Must be 100 characters or fewer."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"event_type":"generated_event_type","client_payload":[]}';
    /**
     * A custom webhook event name. Must be 100 characters or fewer.
     */
    public ?string $event_type;
    /**
     * JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.
     */
    public Schema\Repos\CreateDispatchEvent\Request\Applicationjson\ClientPayload $client_payload;
    public function __construct(string $event_type, Schema\Repos\CreateDispatchEvent\Request\Applicationjson\ClientPayload $client_payload)
    {
        $this->event_type = $event_type;
        $this->client_payload = $client_payload;
    }
}
