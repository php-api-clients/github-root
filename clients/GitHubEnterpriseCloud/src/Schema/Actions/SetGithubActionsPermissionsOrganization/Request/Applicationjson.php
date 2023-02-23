<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"generated_enabled_repositories","allowed_actions":"generated_allowed_actions"}';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    public ?string $enabled_repositories;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public string $allowed_actions;
    public function __construct(string $enabled_repositories, string $allowed_actions)
    {
        $this->enabled_repositories = $enabled_repositories;
        $this->allowed_actions = $allowed_actions;
    }
}
