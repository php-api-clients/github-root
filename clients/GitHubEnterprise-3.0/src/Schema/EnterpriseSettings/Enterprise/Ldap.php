<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Ldap
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"host":"generated_host","port":13,"base":[null],"uid":"generated_uid","bind_dn":"generated_bind_dn","password":"generated_password","method":"generated_method","search_strategy":"generated_search_strategy","user_groups":[null],"admin_group":"generated_admin_group","virtual_attribute_enabled":false,"recursive_group_search":false,"posix_support":false,"user_sync_emails":false,"user_sync_keys":false,"user_sync_interval":13,"team_sync_interval":13,"sync_enabled":false,"reconciliation":{"user":"generated_user","org":"generated_org"},"profile":{"uid":"generated_uid","name":"generated_name","mail":"generated_mail","key":"generated_key"}}';
    public ?string $host;
    public ?int $port;
    /**
     * @var array<mixed>
     */
    public ?array $base;
    public ?string $uid;
    public ?string $bind_dn;
    public ?string $password;
    public ?string $method;
    public ?string $search_strategy;
    /**
     * @var array<mixed>
     */
    public ?array $user_groups;
    public ?string $admin_group;
    public ?bool $virtual_attribute_enabled;
    public ?bool $recursive_group_search;
    public ?bool $posix_support;
    public ?bool $user_sync_emails;
    public ?bool $user_sync_keys;
    public ?int $user_sync_interval;
    public ?int $team_sync_interval;
    public ?bool $sync_enabled;
    public ?Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation $reconciliation;
    public ?Schema\EnterpriseSettings\Enterprise\Ldap\Profile $profile;
    public function __construct(string $host, int $port, array $base, string $uid, string $bind_dn, string $password, string $method, string $search_strategy, array $user_groups, string $admin_group, bool $virtual_attribute_enabled, bool $recursive_group_search, bool $posix_support, bool $user_sync_emails, bool $user_sync_keys, int $user_sync_interval, int $team_sync_interval, bool $sync_enabled, Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation $reconciliation, Schema\EnterpriseSettings\Enterprise\Ldap\Profile $profile)
    {
        $this->host = $host;
        $this->port = $port;
        $this->base = $base;
        $this->uid = $uid;
        $this->bind_dn = $bind_dn;
        $this->password = $password;
        $this->method = $method;
        $this->search_strategy = $search_strategy;
        $this->user_groups = $user_groups;
        $this->admin_group = $admin_group;
        $this->virtual_attribute_enabled = $virtual_attribute_enabled;
        $this->recursive_group_search = $recursive_group_search;
        $this->posix_support = $posix_support;
        $this->user_sync_emails = $user_sync_emails;
        $this->user_sync_keys = $user_sync_keys;
        $this->user_sync_interval = $user_sync_interval;
        $this->team_sync_interval = $team_sync_interval;
        $this->sync_enabled = $sync_enabled;
        $this->reconciliation = $reconciliation;
        $this->profile = $profile;
    }
}
