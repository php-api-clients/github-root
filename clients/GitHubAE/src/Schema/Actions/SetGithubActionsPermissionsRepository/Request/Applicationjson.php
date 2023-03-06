<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Actions\SetGithubActionsPermissionsRepository\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"allowed_actions":"generated_allowed_actions"}';
    /**
     * enabled: Whether GitHub Actions is enabled on the repository.
     * allowed_actions: The permissions policy that controls the actions that are allowed to run.
     */
    public function __construct(public ?bool $enabled, public string $allowed_actions)
    {
    }
}
