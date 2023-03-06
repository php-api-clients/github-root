<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\CreateOrg\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["login","admin"],"type":"object","properties":{"login":{"type":"string","description":"The organization\'s username."},"admin":{"type":"string","description":"The login of the user who will manage this organization."},"profile_name":{"type":"string","description":"The organization\'s display name."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login","admin":"generated_admin","profile_name":"generated_profile_name"}';
    /**
     * login: The organization's username.
     * admin: The login of the user who will manage this organization.
     * profile_name: The organization's display name.
     */
    public function __construct(public ?string $login, public ?string $admin, public string $profile_name)
    {
    }
}
