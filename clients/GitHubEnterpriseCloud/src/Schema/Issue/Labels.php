<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Issue;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]},"default":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id","url":"generated_url","name":"generated_name","description":"generated_description","color":"generated_color","default":false}';
    public ?int $id;
    public ?string $node_id;
    public ?string $url;
    public ?string $name;
    public ?string $description;
    public ?string $color;
    public ?bool $default;
    public function __construct(int $id, string $node_id, string $url, string $name, string $description, string $color, bool $default)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->color = $color;
        $this->default = $default;
    }
}
