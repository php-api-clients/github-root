<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet6B7C5D24\TietF81FBDC5\TietA81B1E0A;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietE1110A84
{
    public const SCHEMA_JSON         = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth application."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated"}';

    /**
     * accessToken: The access_token of the OAuth application.
     */
    public function __construct(#[MapFrom('access_token')] public string $accessToken)
    {
    }
}
