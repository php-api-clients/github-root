<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
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
     * teamId: The id for a team
     * teamName: The name of the team
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('team_id')] public int $teamId, #[\EventSauce\ObjectHydrator\MapFrom('team_name')] public string $teamName)
    {
    }
}
