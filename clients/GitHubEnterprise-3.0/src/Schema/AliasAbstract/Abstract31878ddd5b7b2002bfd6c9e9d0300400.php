<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstract31878ddd5b7b2002bfd6c9e9d0300400
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"}},"description":"Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users_null"],"teams":["generated_teams_null"]}';
    /**
     * users: The list of user `login`s with dismissal access
     * @param ?array<string> $users
     * teams: The list of team `slug`s with dismissal access
     * @param ?array<string> $teams
     */
    public function __construct(public ?array $users, public ?array $teams)
    {
    }
}
