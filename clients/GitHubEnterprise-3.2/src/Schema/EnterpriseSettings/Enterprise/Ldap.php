<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Ldap
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"host":"generated_host_null","port":13,"base":[null],"uid":"generated_uid_null","bind_dn":"generated_bind_dn_null","password":"generated_password_null","method":"generated_method_null","search_strategy":"generated_search_strategy_null","user_groups":[null],"admin_group":"generated_admin_group_null","virtual_attribute_enabled":false,"recursive_group_search":false,"posix_support":false,"user_sync_emails":false,"user_sync_keys":false,"user_sync_interval":13,"team_sync_interval":13,"sync_enabled":false,"reconciliation":{"user":"generated_user_null","org":"generated_org_null"},"profile":{"uid":"generated_uid_null","name":"generated_name_null","mail":"generated_mail_null","key":"generated_key_null"}}';
    /**
     * @param ?array<mixed> $base
     * @param ?array<mixed> $userGroups
     */
    public function __construct(public ?string $host, public ?int $port, public ?array $base, public ?string $uid, #[\EventSauce\ObjectHydrator\MapFrom('bind_dn')] public ?string $bindDn, public ?string $password, public ?string $method, #[\EventSauce\ObjectHydrator\MapFrom('search_strategy')] public ?string $searchStrategy, #[\EventSauce\ObjectHydrator\MapFrom('user_groups')] public ?array $userGroups, #[\EventSauce\ObjectHydrator\MapFrom('admin_group')] public ?string $adminGroup, #[\EventSauce\ObjectHydrator\MapFrom('virtual_attribute_enabled')] public ?bool $virtualAttributeEnabled, #[\EventSauce\ObjectHydrator\MapFrom('recursive_group_search')] public ?bool $recursiveGroupSearch, #[\EventSauce\ObjectHydrator\MapFrom('posix_support')] public ?bool $posixSupport, #[\EventSauce\ObjectHydrator\MapFrom('user_sync_emails')] public ?bool $userSyncEmails, #[\EventSauce\ObjectHydrator\MapFrom('user_sync_keys')] public ?bool $userSyncKeys, #[\EventSauce\ObjectHydrator\MapFrom('user_sync_interval')] public ?int $userSyncInterval, #[\EventSauce\ObjectHydrator\MapFrom('team_sync_interval')] public ?int $teamSyncInterval, #[\EventSauce\ObjectHydrator\MapFrom('sync_enabled')] public ?bool $syncEnabled, public ?Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation $reconciliation, public ?Schema\EnterpriseSettings\Enterprise\Ldap\Profile $profile)
    {
    }
}
