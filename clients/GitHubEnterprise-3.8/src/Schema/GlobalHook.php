<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class GlobalHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"active":{"type":"boolean"},"events":{"type":"array","items":{"type":"string"}},"config":{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"}}},"updated_at":{"type":"string"},"created_at":{"type":"string"},"url":{"type":"string"},"ping_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","id":13,"name":"generated_name_null","active":false,"events":["generated_events_null"],"config":{"url":"generated_url_null","content_type":"generated_content_type_null","insecure_ssl":"generated_insecure_ssl_null","secret":"generated_secret_null"},"updated_at":"generated_updated_at_null","created_at":"generated_created_at_null","url":"generated_url_null","ping_url":"generated_ping_url_null"}';
    /**
     * @param ?array<string> $events
     */
    public function __construct(public ?string $type, public ?int $id, public ?string $name, public ?bool $active, public ?array $events, public ?Schema\GlobalHook\Config $config, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('ping_url')] public ?string $pingUrl)
    {
    }
}
