<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsInOrg\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Groups
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","group_description"],"type":"object","properties":{"group_id":{"type":"string","description":"ID of the IdP group."},"group_name":{"type":"string","description":"Name of the IdP group."},"group_description":{"type":"string","description":"Description of the IdP group."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":"generated_group_id","group_name":"generated_group_name","group_description":"generated_group_description"}';
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
    public function __construct(string $group_id, string $group_name, string $group_description)
    {
        $this->group_id = $group_id;
        $this->group_name = $group_name;
        $this->group_description = $group_description;
    }
}
