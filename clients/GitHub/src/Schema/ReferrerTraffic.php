<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ReferrerTraffic
{
    public const SCHEMA_JSON = '{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}';
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"referrer":"Google","count":4,"uniques":3}';
    public ?string $referrer;
    public ?int $count;
    public ?int $uniques;
    public function __construct(string $referrer, int $count, int $uniques)
    {
        $this->referrer = $referrer;
        $this->count = $count;
        $this->uniques = $uniques;
    }
}
