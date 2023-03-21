<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ActionsRepositoryPermissions
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"allowed_actions":"all","selected_actions_url":"generated_selected_actions_url_null"}';
    /**
     * enabled: Whether GitHub Actions is enabled on the repository.
     * allowed_actions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     * selected_actions_url: The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function __construct(public bool $enabled, public ?string $allowed_actions, public ?string $selected_actions_url)
    {
    }
}
