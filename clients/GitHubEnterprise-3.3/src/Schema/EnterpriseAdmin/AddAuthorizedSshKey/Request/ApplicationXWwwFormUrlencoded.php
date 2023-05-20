<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\AddAuthorizedSshKey\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationXWwwFormUrlencoded
{
    public const SCHEMA_JSON         = '{"required":["authorized_key"],"type":"object","properties":{"authorized_key":{"type":"string","description":"The public SSH key."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"authorized_key":"generated"}';

    /**
     * authorizedKey: The public SSH key.
     */
    public function __construct(#[MapFrom('authorized_key')] public string $authorizedKey)
    {
    }
}
