<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ViewTraffic
{
    public const SCHEMA_JSON = '{"title":"View Traffic","required":["uniques","count","views"],"type":"object","properties":{"count":{"type":"integer","examples":[14850]},"uniques":{"type":"integer","examples":[3782]},"views":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"View Traffic"}';
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"count":14850,"uniques":3782,"views":[{"timestamp":"generated_timestamp","uniques":13,"count":13}]}';
    public ?int $count;
    public ?int $uniques;
    /**
     * @var array<Schema\Traffic>
     */
    public ?array $views;
    public function __construct(int $count, int $uniques, array $views)
    {
        $this->count = $count;
        $this->uniques = $uniques;
        $this->views = $views;
    }
}
