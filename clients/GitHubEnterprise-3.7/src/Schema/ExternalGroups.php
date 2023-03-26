<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ExternalGroups
{
    public const SCHEMA_JSON = '{"title":"ExternalGroups","type":"object","properties":{"groups":{"type":"array","items":{"required":["group_id","group_name","updated_at"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name of the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The time of the last update for this group","examples":["2019-06-03 22:27:15:000 -700"]}}},"description":"An array of external groups available to be mapped to a team","examples":[{"group_id":1,"group_name":"group-azuread-test","updated_at":"2021-01-03 22:27:15:000 -700"},{"group_id":2,"group_name":"group-azuread-test2","updated_at":"2021-06-03 22:27:15:000 -700"}]}},"description":"A list of external groups available to be connected to a team"}';
    public const SCHEMA_TITLE = 'ExternalGroups';
    public const SCHEMA_DESCRIPTION = 'A list of external groups available to be connected to a team';
    public const SCHEMA_EXAMPLE_DATA = '{"groups":[{"group_id":1,"group_name":"group-azuread-test","updated_at":"2021-01-03 22:27:15:000 -700"}]}';
    /**
     * groups: An array of external groups available to be mapped to a team
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups> $groups
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ExternalGroups\Groups::class)] public ?array $groups)
    {
    }
}
