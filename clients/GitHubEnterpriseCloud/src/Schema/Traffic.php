<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Traffic
{
    public const SCHEMA_JSON = '{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Traffic';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"timestamp":"generated_timestamp","uniques":13,"count":13}';
    public ?string $timestamp;
    public ?int $uniques;
    public ?int $count;
    public function __construct(string $timestamp, int $uniques, int $count)
    {
        $this->timestamp = $timestamp;
        $this->uniques = $uniques;
        $this->count = $count;
    }
}
