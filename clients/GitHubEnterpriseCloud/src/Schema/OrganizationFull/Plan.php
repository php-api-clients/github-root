<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Plan
{
    public const SCHEMA_JSON = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","space":13,"private_repos":13,"filled_seats":13,"seats":13}';
    public function __construct(public string $name, public int $space, #[\EventSauce\ObjectHydrator\MapFrom('private_repos')] public int $privateRepos, #[\EventSauce\ObjectHydrator\MapFrom('filled_seats')] public ?int $filledSeats, public ?int $seats)
    {
    }
}
