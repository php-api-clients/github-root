<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

final readonly class Snmp
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enabled":{"type":"boolean"},"community":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"community":"generated_community_null"}';

    public function __construct(public ?bool $enabled, public ?string $community)
    {
    }
}
