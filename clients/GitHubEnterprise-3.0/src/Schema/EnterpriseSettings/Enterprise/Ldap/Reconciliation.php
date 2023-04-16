<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap;

final readonly class Reconciliation
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"user":"generated_user_null","org":"generated_org_null"}';

    public function __construct(public ?string $user, public ?string $org)
    {
    }
}
