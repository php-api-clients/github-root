<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_organizations"],"type":"object","properties":{"enabled_organizations":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_organizations":"all","allowed_actions":"all"}';
    /**
     * enabledOrganizations: The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     * allowedActions: The permissions policy that controls the actions that are allowed to run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enabled_organizations')] public string $enabledOrganizations, #[\EventSauce\ObjectHydrator\MapFrom('allowed_actions')] public ?string $allowedActions)
    {
    }
}
