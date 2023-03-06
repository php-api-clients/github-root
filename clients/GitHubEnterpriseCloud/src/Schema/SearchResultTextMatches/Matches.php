<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\SearchResultTextMatches;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text","indices":[13]}';
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
