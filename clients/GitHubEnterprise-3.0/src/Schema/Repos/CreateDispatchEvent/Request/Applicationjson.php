<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateDispatchEvent\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["event_type"],"type":"object","properties":{"event_type":{"maxLength":100,"minLength":1,"type":"string","description":"A custom webhook event name."},"client_payload":{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or worklow may use.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"event_type":"generated_event_type_null","client_payload":null}';
    /**
     * eventType: A custom webhook event name.
     * clientPayload: JSON payload with extra information about the webhook event that your action or worklow may use.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('event_type')] public string $eventType, #[\EventSauce\ObjectHydrator\MapFrom('client_payload')] public mixed $clientPayload)
    {
    }
}
