<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class CloneTraffic
{
    public const SCHEMA_JSON = '{"title":"Clone Traffic","required":["uniques","count","clones"],"type":"object","properties":{"count":{"type":"integer","examples":[173]},"uniques":{"type":"integer","examples":[128]},"clones":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"Clone Traffic"}';
    public const SCHEMA_TITLE = 'Clone Traffic';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"count":173,"uniques":128,"clones":[{"timestamp":"1970-01-01T00:00:00+00:00","uniques":13,"count":13}]}';
    /**
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\Traffic> $clones
     */
    public function __construct(public int $count, public int $uniques, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Traffic::class)] public array $clones)
    {
    }
}
