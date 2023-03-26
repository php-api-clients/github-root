<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Members
{
    public const SCHEMA_JSON = '{"required":["member_id","member_login","member_name","member_email"],"type":"object","properties":{"member_id":{"type":"integer","description":"The internal user ID of the identity","examples":[1]},"member_login":{"type":"string","description":"The handle\\/login for the user","examples":["mona-lisa_eocsaxrs"]},"member_name":{"type":"string","description":"The user display name\\/profile name","examples":["Mona Lisa"]},"member_email":{"type":"string","description":"An email attached to a user","examples":["mona_lisa@github.com"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"member_id":1,"member_login":"mona-lisa_eocsaxrs","member_name":"Mona Lisa","member_email":"mona_lisa@github.com"}';
    /**
     * memberId: The internal user ID of the identity
     * memberLogin: The handle/login for the user
     * memberName: The user display name/profile name
     * memberEmail: An email attached to a user
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('member_id')] public int $memberId, #[\EventSauce\ObjectHydrator\MapFrom('member_login')] public string $memberLogin, #[\EventSauce\ObjectHydrator\MapFrom('member_name')] public string $memberName, #[\EventSauce\ObjectHydrator\MapFrom('member_email')] public string $memberEmail)
    {
    }
}
