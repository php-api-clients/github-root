<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"all","allowed_actions":"all"}';
    /**
     * enabledRepositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * allowedActions: The permissions policy that controls the actions that are allowed to run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enabled_repositories')] public string $enabledRepositories, #[\EventSauce\ObjectHydrator\MapFrom('allowed_actions')] public ?string $allowedActions)
    {
    }
}
