<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class GroupMapping
{
    public const SCHEMA_JSON = '{"title":"GroupMapping","type":"object","properties":{"groups":{"type":"array","items":{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"The ID of the group","examples":["111a1a11-aaa1-1aaa-11a1-a1a1a1a1a1aa"]},"group_name":{"type":"string","description":"The name of the group","examples":["saml-azuread-test"]},"group_description":{"type":"string","description":"a description of the group","examples":["A group of Developers working on AzureAD SAML SSO"]},"status":{"type":"string","description":"synchronization status for this group mapping","examples":["unsynced"]},"synced_at":{"type":["string","null"],"description":"the time of the last sync for this group-mapping","examples":["2019-06-03 22:27:15:000 -700"]}}},"description":"Array of groups to be mapped to this team","examples":[{"group_id":"111a1a11-aaa1-1aaa-11a1-a1a1a1a1a1aa","group_name":"saml-azuread-test","group_description":"A group of Developers working on AzureAD SAML SSO"},{"group_id":"2bb2bb2b-bb22-22bb-2bb2-bb2bbb2bb2b2","group_name":"saml-azuread-test2","group_description":"Another group of Developers working on AzureAD SAML SSO"}]}},"description":"External Groups to be mapped to a team for membership"}';
    public const SCHEMA_TITLE = 'GroupMapping';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    public const SCHEMA_EXAMPLE_DATA = '{"groups":[{"group_id":"111a1a11-aaa1-1aaa-11a1-a1a1a1a1a1aa","group_name":"saml-azuread-test","group_description":"A group of Developers working on AzureAD SAML SSO","status":"unsynced","synced_at":"2019-06-03 22:27:15:000 -700"}]}';
    /**
     * groups: Array of groups to be mapped to this team
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping\Groups> $groups
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GroupMapping\Groups::class)] public ?array $groups)
    {
    }
}
