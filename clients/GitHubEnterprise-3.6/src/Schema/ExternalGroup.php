<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ExternalGroup
{
    public const SCHEMA_JSON = '{"title":"ExternalGroup","required":["group_id","group_name","teams","members"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name for the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The date when the group was last updated_at","examples":["2021-01-03 22:27:15:000 -700"]},"teams":{"type":"array","items":{"required":["team_id","team_name"],"type":"object","properties":{"team_id":{"type":"integer","description":"The id for a team","examples":[1]},"team_name":{"type":"string","description":"The name of the team","examples":["team-test"]}}},"description":"An array of teams linked to this group","examples":[{"team_id":1,"team_name":"team-test"},{"team_id":2,"team_name":"team-test2"}]},"members":{"type":"array","items":{"required":["member_id","member_login","member_name","member_email"],"type":"object","properties":{"member_id":{"type":"integer","description":"The internal user ID of the identity","examples":[1]},"member_login":{"type":"string","description":"The handle\\/login for the user","examples":["mona-lisa_eocsaxrs"]},"member_name":{"type":"string","description":"The user display name\\/profile name","examples":["Mona Lisa"]},"member_email":{"type":"string","description":"An email attached to a user","examples":["mona_lisa@github.com"]}}},"description":"An array of external members linked to this group","examples":[{"member_id":1,"member_login":"mona-lisa_eocsaxrs","member_name":"Mona Lisa","member_email":"mona_lisa@github.com"},{"member_id":2,"member_login":"octo-lisa_eocsaxrs","member_name":"Octo Lisa","member_email":"octo_lisa@github.com"}]}},"description":"Information about an external group\'s usage and its members"}';
    public const SCHEMA_TITLE = 'ExternalGroup';
    public const SCHEMA_DESCRIPTION = 'Information about an external group\'s usage and its members';
    public const SCHEMA_EXAMPLE_DATA = '{"group_id":1,"group_name":"group-azuread-test","updated_at":"2021-01-03 22:27:15:000 -700","teams":[{"team_id":2,"team_name":"team-test2"}],"members":[{"member_id":1,"member_login":"mona-lisa_eocsaxrs","member_name":"Mona Lisa","member_email":"mona_lisa@github.com"}]}';
    /**
     * The internal ID of the group
     */
    public ?int $group_id;
    /**
     * The display name for the group
     */
    public ?string $group_name;
    /**
     * The date when the group was last updated_at
     */
    public string $updated_at;
    /**
     * An array of teams linked to this group
     * @var array<Schema\ExternalGroup\Teams>
     */
    public ?array $teams;
    /**
     * An array of external members linked to this group
     * @var array<Schema\ExternalGroup\Members>
     */
    public ?array $members;
    public function __construct(int $group_id, string $group_name, string $updated_at, array $teams, array $members)
    {
        $this->group_id = $group_id;
        $this->group_name = $group_name;
        $this->updated_at = $updated_at;
        $this->teams = $teams;
        $this->members = $members;
    }
}
