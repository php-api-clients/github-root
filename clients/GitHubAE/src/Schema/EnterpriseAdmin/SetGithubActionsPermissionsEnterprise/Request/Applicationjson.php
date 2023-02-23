<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_organizations"],"type":"object","properties":{"enabled_organizations":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_organizations":"generated_enabled_organizations","allowed_actions":"generated_allowed_actions"}';
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    public ?string $enabled_organizations;
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    public string $allowed_actions;
    public function __construct(string $enabled_organizations, string $allowed_actions)
    {
        $this->enabled_organizations = $enabled_organizations;
        $this->allowed_actions = $allowed_actions;
    }
}
