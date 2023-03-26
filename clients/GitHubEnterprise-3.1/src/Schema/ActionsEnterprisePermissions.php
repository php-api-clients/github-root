<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActionsEnterprisePermissions
{
    public const SCHEMA_JSON = '{"required":["enabled_organizations"],"type":"object","properties":{"enabled_organizations":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."},"selected_organizations_url":{"type":"string","description":"The API URL to use to get or set the selected organizations that are allowed to run GitHub Actions, when `enabled_organizations` is set to `selected`."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_organizations":"all","selected_organizations_url":"generated_selected_organizations_url_null","allowed_actions":"all","selected_actions_url":"generated_selected_actions_url_null"}';
    /**
     * enabledOrganizations: The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     * selectedOrganizationsUrl: The API URL to use to get or set the selected organizations that are allowed to run GitHub Actions, when `enabled_organizations` is set to `selected`.
     * allowedActions: The permissions policy that controls the actions that are allowed to run.
     * selectedActionsUrl: The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enabled_organizations')] public string $enabledOrganizations, #[\EventSauce\ObjectHydrator\MapFrom('selected_organizations_url')] public ?string $selectedOrganizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('allowed_actions')] public ?string $allowedActions, #[\EventSauce\ObjectHydrator\MapFrom('selected_actions_url')] public ?string $selectedActionsUrl)
    {
    }
}
