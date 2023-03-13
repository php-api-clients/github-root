<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ExternalGroups;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Groups
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","updated_at"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name of the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The time of the last update for this group","examples":["2019-06-03 22:27:15:000 -700"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":1,"group_name":"group-azuread-test","updated_at":"2019-06-03 22:27:15:000 -700"}';
    /**
     * group_id: The internal ID of the group
     * group_name: The display name of the group
     * updated_at: The time of the last update for this group
     */
    public function __construct(public int $group_id, public string $group_name, public string $updated_at)
    {
    }
}
