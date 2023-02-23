<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsLegacy\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Groups
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"ID of the IdP group."},"group_name":{"type":"string","description":"Name of the IdP group."},"group_description":{"type":"string","description":"Description of the IdP group."},"id":{"type":"string","examples":["\\"caceab43fc9ffa20081c\\""]},"name":{"type":"string","examples":["\\"external-team-6c13e7288ef7\\""]},"description":{"type":"string","examples":["\\"moar cheese pleese\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":"generated_group_id","group_name":"generated_group_name","group_description":"generated_group_description","id":"\\"caceab43fc9ffa20081c\\"","name":"\\"external-team-6c13e7288ef7\\"","description":"\\"moar cheese pleese\\""}';
    /**
     * ID of the IdP group.
     */
    public ?string $group_id;
    /**
     * Name of the IdP group.
     */
    public ?string $group_name;
    /**
     * Description of the IdP group.
     */
    public ?string $group_description;
    public string $id;
    public string $name;
    public string $description;
    public function __construct(string $group_id, string $group_name, string $group_description, string $id, string $name, string $description)
    {
        $this->group_id = $group_id;
        $this->group_name = $group_name;
        $this->group_description = $group_description;
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}
