<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Reconciliation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"user":"generated_user","org":"generated_org"}';
    public ?string $user;
    public ?string $org;
    public function __construct(string $user, string $org)
    {
        $this->user = $user;
        $this->org = $org;
    }
}
