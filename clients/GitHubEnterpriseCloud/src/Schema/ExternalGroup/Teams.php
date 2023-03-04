<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Teams
{
    public const SCHEMA_JSON = '{"required":["team_id","team_name"],"type":"object","properties":{"team_id":{"type":"integer","description":"The id for a team","examples":[1]},"team_name":{"type":"string","description":"The name of the team","examples":["team-test"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"team_id":1,"team_name":"team-test"}';
    /**
     * The id for a team
     */
    public ?int $team_id;
    /**
     * The name of the team
     */
    public ?string $team_name;
    public function __construct(int $team_id, string $team_name)
    {
        $this->team_id = $team_id;
        $this->team_name = $team_name;
    }
}
