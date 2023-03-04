<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ActionsRepositoryPermissions
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"allowed_actions":"generated_allowed_actions","selected_actions_url":"generated_selected_actions_url"}';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public ?bool $enabled;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public string $allowed_actions;
    /**
     * The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public string $selected_actions_url;
    public function __construct(bool $enabled, string $allowed_actions, string $selected_actions_url)
    {
        $this->enabled = $enabled;
        $this->allowed_actions = $allowed_actions;
        $this->selected_actions_url = $selected_actions_url;
    }
}
