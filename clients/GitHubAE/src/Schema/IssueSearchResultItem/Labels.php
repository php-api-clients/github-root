<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\IssueSearchResultItem;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id","url":"generated_url","name":"generated_name","color":"generated_color","default":false,"description":"generated_description"}';
    public ?int $id;
    public ?string $node_id;
    public ?string $url;
    public ?string $name;
    public ?string $color;
    public ?bool $default;
    public ?string $description;
    public function __construct(int $id, string $node_id, string $url, string $name, string $color, bool $default, string $description)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->color = $color;
        $this->default = $default;
        $this->description = $description;
    }
}
