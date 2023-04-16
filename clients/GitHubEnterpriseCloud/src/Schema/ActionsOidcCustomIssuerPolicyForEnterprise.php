<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsOidcCustomIssuerPolicyForEnterprise
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"include_enterprise_slug":{"type":"boolean","description":"Whether the enterprise customer requested a custom issuer URL.","examples":[true]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"include_enterprise_slug":true}';

    /**
     * includeEnterpriseSlug: Whether the enterprise customer requested a custom issuer URL.
     */
    public function __construct(#[MapFrom('include_enterprise_slug')] public ?bool $includeEnterpriseSlug)
    {
    }
}
