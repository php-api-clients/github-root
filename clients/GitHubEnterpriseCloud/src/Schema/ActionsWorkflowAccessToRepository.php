<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ActionsWorkflowAccessToRepository
{
    public const SCHEMA_JSON = '{"required":["access_level"],"type":"object","properties":{"access_level":{"enum":["none","user","organization","enterprise"],"type":"string","description":"Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the\\nrepository.\\n\\n`none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"access_level":"none"}';
    /**
    * accessLevel: Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository.
    
    `none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization. `enterprise` level access allows sharing across the enterprise.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('access_level')] public string $accessLevel)
    {
    }
}
