<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsInOrg\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Groups
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"ID of the IdP group."},"group_name":{"type":"string","description":"Name of the IdP group."},"group_description":{"type":"string","description":"Description of the IdP group."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":"generated_group_id_null","group_name":"generated_group_name_null","group_description":"generated_group_description_null"}';
    /**
     * groupId: ID of the IdP group.
     * groupName: Name of the IdP group.
     * groupDescription: Description of the IdP group.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('group_id')] public string $groupId, #[\EventSauce\ObjectHydrator\MapFrom('group_name')] public string $groupName, #[\EventSauce\ObjectHydrator\MapFrom('group_description')] public string $groupDescription)
    {
    }
}
