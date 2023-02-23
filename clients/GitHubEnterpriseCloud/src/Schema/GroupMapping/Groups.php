<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Groups
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"The ID of the group","examples":["111a1a11-aaa1-1aaa-11a1-a1a1a1a1a1aa"]},"group_name":{"type":"string","description":"The name of the group","examples":["saml-azuread-test"]},"group_description":{"type":"string","description":"a description of the group","examples":["A group of Developers working on AzureAD SAML SSO"]},"status":{"type":"string","description":"synchronization status for this group mapping","examples":["unsynced"]},"synced_at":{"type":["string","null"],"description":"the time of the last sync for this group-mapping","examples":["2019-06-03 22:27:15:000 -700"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":"111a1a11-aaa1-1aaa-11a1-a1a1a1a1a1aa","group_name":"saml-azuread-test","group_description":"A group of Developers working on AzureAD SAML SSO","status":"unsynced","synced_at":"2019-06-03 22:27:15:000 -700"}';
    /**
     * The ID of the group
     */
    public ?string $group_id;
    /**
     * The name of the group
     */
    public ?string $group_name;
    /**
     * a description of the group
     */
    public ?string $group_description;
    /**
     * synchronization status for this group mapping
     */
    public string $status;
    /**
     * the time of the last sync for this group-mapping
     */
    public ?string $synced_at;
    public function __construct(string $group_id, string $group_name, string $group_description, string $status, string $synced_at)
    {
        $this->group_id = $group_id;
        $this->group_name = $group_name;
        $this->group_description = $group_description;
        $this->status = $status;
        $this->synced_at = $synced_at;
    }
}
