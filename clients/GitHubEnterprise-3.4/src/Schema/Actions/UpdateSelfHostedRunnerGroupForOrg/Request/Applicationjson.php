<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\UpdateSelfHostedRunnerGroupForOrg\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","visibility":"selected","allows_public_repositories":false}';
    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories.
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     */
    public function __construct(public string $name, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('allows_public_repositories')] public ?bool $allowsPublicRepositories)
    {
    }
}
