<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActionsWorkflowAccessToRepository
{
    public const SCHEMA_JSON = '{"required":["access_level"],"type":"object","properties":{"access_level":{"enum":["none","organization","enterprise"],"type":"string","description":"Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the\\nrepository.\\n\\n`none` means the access is only possible from workflows in this repository. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_level":"none"}';
    /**
    * accessLevel: Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository.
    
    `none` means the access is only possible from workflows in this repository. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('access_level')] public string $accessLevel)
    {
    }
}
