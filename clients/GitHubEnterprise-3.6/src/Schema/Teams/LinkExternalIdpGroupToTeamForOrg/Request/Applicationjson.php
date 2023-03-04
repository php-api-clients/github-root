<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\LinkExternalIdpGroupToTeamForOrg\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["group_id"],"type":"object","properties":{"group_id":{"type":"integer","description":"External Group Id","examples":[1]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":1}';
    /**
     * External Group Id
     */
    public ?int $group_id;
    public function __construct(int $group_id)
    {
        $this->group_id = $group_id;
    }
}
