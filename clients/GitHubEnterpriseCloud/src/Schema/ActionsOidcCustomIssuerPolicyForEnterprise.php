<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsOidcCustomIssuerPolicyForEnterprise
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"include_enterprise_slug":{"type":"boolean","description":"Whether the enterprise customer requested a custom issuer URL.","examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"include_enterprise_slug":true}';
    /**
     * includeEnterpriseSlug: Whether the enterprise customer requested a custom issuer URL.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('include_enterprise_slug')] public ?bool $includeEnterpriseSlug)
    {
    }
}
