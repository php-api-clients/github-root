<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class BranchShort
{
    public const SCHEMA_JSON = '{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}';
    public const SCHEMA_TITLE = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","commit":{"sha":"generated_sha","url":"generated_url"},"protected":false}';
    public ?string $name;
    public ?Schema\BranchShort\Commit $commit;
    public ?bool $protected;
    public function __construct(string $name, Schema\BranchShort\Commit $commit, bool $protected)
    {
        $this->name = $name;
        $this->commit = $commit;
        $this->protected = $protected;
    }
}
