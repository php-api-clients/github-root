<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Repos\UpdateBranchProtection\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Restrictions
{
    public const SCHEMA_JSON = '{"required":["users","teams"],"type":["object","null"],"properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with push access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with push access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with push access"}},"description":"Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]}';
    /**
     * The list of user `login`s with push access
     * @var array<string>
     */
    public ?array $users;
    /**
     * The list of team `slug`s with push access
     * @var array<string>
     */
    public ?array $teams;
    /**
     * The list of app `slug`s with push access
     * @var array<string>
     */
    public array $apps;
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
