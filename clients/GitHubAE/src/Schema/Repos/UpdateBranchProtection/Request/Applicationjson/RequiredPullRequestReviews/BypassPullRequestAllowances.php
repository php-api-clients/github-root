<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class BypassPullRequestAllowances
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]}';
    /**
     * The list of user `login`s allowed to bypass pull request requirements.
     * @var array<string>
     */
    public ?array $users;
    /**
     * The list of team `slug`s allowed to bypass pull request requirements.
     * @var array<string>
     */
    public ?array $teams;
    /**
     * The list of app `slug`s allowed to bypass pull request requirements.
     * @var array<string>
     */
    public ?array $apps;
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
