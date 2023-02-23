<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ExternalGroup;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Members
{
    public const SCHEMA_JSON = '{"required":["member_id","member_login","member_name","member_email"],"type":"object","properties":{"member_id":{"type":"integer","description":"The internal user ID of the identity","examples":[1]},"member_login":{"type":"string","description":"The handle\\/login for the user","examples":["mona-lisa_eocsaxrs"]},"member_name":{"type":"string","description":"The user display name\\/profile name","examples":["Mona Lisa"]},"member_email":{"type":"string","description":"An email attached to a user","examples":["mona_lisa@github.com"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"member_id":1,"member_login":"mona-lisa_eocsaxrs","member_name":"Mona Lisa","member_email":"mona_lisa@github.com"}';
    /**
     * The internal user ID of the identity
     */
    public ?int $member_id;
    /**
     * The handle/login for the user
     */
    public ?string $member_login;
    /**
     * The user display name/profile name
     */
    public ?string $member_name;
    /**
     * An email attached to a user
     */
    public ?string $member_email;
    public function __construct(int $member_id, string $member_login, string $member_name, string $member_email)
    {
        $this->member_id = $member_id;
        $this->member_login = $member_login;
        $this->member_name = $member_name;
        $this->member_email = $member_email;
    }
}
