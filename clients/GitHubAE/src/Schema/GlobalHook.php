<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class GlobalHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"type":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"active":{"type":"boolean"},"events":{"type":"array","items":{"type":"string"}},"config":{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"}}},"updated_at":{"type":"string"},"created_at":{"type":"string"},"url":{"type":"string"},"ping_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","id":13,"name":"generated_name","active":false,"events":["generated_events"],"config":{"url":"generated_url","content_type":"generated_content_type","insecure_ssl":"generated_insecure_ssl","secret":"generated_secret"},"updated_at":"generated_updated_at","created_at":"generated_created_at","url":"generated_url","ping_url":"generated_ping_url"}';
    public ?string $type;
    public ?int $id;
    public ?string $name;
    public ?bool $active;
    /**
     * @var array<string>
     */
    public ?array $events;
    public ?Schema\GlobalHook\Config $config;
    public ?string $updated_at;
    public ?string $created_at;
    public ?string $url;
    public ?string $ping_url;
    public function __construct(string $type, int $id, string $name, bool $active, array $events, Schema\GlobalHook\Config $config, string $updated_at, string $created_at, string $url, string $ping_url)
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->active = $active;
        $this->events = $events;
        $this->config = $config;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->url = $url;
        $this->ping_url = $ping_url;
    }
}
