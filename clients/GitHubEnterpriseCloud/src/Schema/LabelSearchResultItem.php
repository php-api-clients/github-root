<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class LabelSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}';
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id","url":"generated_url","name":"generated_name","color":"generated_color","default":false,"description":"generated_description","score":13,"text_matches":[{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}]}';
    public ?int $id;
    public ?string $node_id;
    public ?string $url;
    public ?string $name;
    public ?string $color;
    public ?bool $default;
    public ?string $description;
    public ?int $score;
    /**
     * @var array<Schema\SearchResultTextMatches>
     */
    public array $text_matches;
    public function __construct(int $id, string $node_id, string $url, string $name, string $color, bool $default, string $description, int $score, array $text_matches)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->color = $color;
        $this->default = $default;
        $this->description = $description;
        $this->score = $score;
        $this->text_matches = $text_matches;
    }
}
