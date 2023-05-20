<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GlobalHook
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"active":{"type":"boolean"},"events":{"type":"array","items":{"type":"string"}},"config":{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"}}},"updated_at":{"type":"string"},"created_at":{"type":"string"},"url":{"type":"string"},"ping_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated","id":2,"name":"generated","active":false,"events":["generated","generated"],"config":{"url":"generated","content_type":"generated","insecure_ssl":"generated","secret":"generated"},"updated_at":"generated","created_at":"generated","url":"generated","ping_url":"generated"}';

    public function __construct(public ?string $type, public ?int $id, public ?string $name, public ?bool $active, public ?array $events, public ?Schema\GlobalHook\Config $config, #[MapFrom('updated_at')] public ?string $updatedAt, #[MapFrom('created_at')] public ?string $createdAt, public ?string $url, #[MapFrom('ping_url')] public ?string $pingUrl)
    {
    }
}
