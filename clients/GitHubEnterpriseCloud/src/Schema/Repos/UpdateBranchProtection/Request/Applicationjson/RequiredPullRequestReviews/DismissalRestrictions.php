<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class DismissalRestrictions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]}';
    /**
     * users: The list of user `login`s with dismissal access
     * @param ?array<string> $users
     * teams: The list of team `slug`s with dismissal access
     * @param ?array<string> $teams
     * apps: The list of app `slug`s with dismissal access
     * @param ?array<string> $apps
     */
    public function __construct(public ?array $users, public ?array $teams, public ?array $apps)
    {
    }
}
