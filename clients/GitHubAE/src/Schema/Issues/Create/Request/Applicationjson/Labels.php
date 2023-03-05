<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Issues\Create\Request\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","description":"generated_description","color":"generated_color"}';
    public ?int $id;
    public ?string $name;
    public ?string $description;
    public ?string $color;
    public function __construct(int $id, string $name, string $description, string $color)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->color = $color;
    }
}
