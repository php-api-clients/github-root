<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\Transfer\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_owner":"generated_new_owner_null","team_ids":[13]}';
    /**
     * newOwner: The username or organization name the repository will be transferred to.
     * teamIds: ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @param ?array<int> $teamIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('new_owner')] public string $newOwner, #[\EventSauce\ObjectHydrator\MapFrom('team_ids')] public ?array $teamIds)
    {
    }
}
