<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract6b7c5d24f81fbdc5a81b1e0ae1110a84
{
    public const SCHEMA_JSON         = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth application."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_token":"generated_access_token_null"}';

    /**
     * accessToken: The access_token of the OAuth application.
     */
    public function __construct(#[MapFrom('access_token')] public string $accessToken)
    {
    }
}
