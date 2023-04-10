<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Teams\LinkExternalIdpGroupToTeamForOrg\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["group_id"],"type":"object","properties":{"group_id":{"type":"integer","description":"External Group Id","examples":[1]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":1}';
    /**
     * groupId: External Group Id
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('group_id')] public int $groupId)
    {
    }
}
