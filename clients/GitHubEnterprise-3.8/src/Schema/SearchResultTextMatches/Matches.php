<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\SearchResultTextMatches;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text","indices":[null]}';
    public ?string $text;
    /**
     * @var array<int>
     */
    public ?array $indices;
    public function __construct(string $text, array $indices)
    {
        $this->text = $text;
        $this->indices = $indices;
    }
}
