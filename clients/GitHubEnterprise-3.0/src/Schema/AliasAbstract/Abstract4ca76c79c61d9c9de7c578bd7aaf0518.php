<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract4ca76c79c61d9c9de7c578bd7aaf0518
{
    public const SCHEMA_JSON         = '{"required":["authorized_key"],"type":"object","properties":{"authorized_key":{"type":"string","description":"The public SSH key."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"authorized_key":"generated_authorized_key_null"}';

    /**
     * authorizedKey: The public SSH key.
     */
    public function __construct(#[MapFrom('authorized_key')] public string $authorizedKey)
    {
    }
}
