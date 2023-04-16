<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"all","allowed_actions":"all"}';

    /**
     * enabledRepositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.
     * allowedActions: The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    public function __construct(#[MapFrom('enabled_repositories')] public string $enabledRepositories, #[MapFrom('allowed_actions')] public ?string $allowedActions)
    {
    }
}
