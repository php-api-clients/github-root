<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Profile
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"uid":"generated_uid","name":"generated_name","mail":"generated_mail","key":"generated_key"}';
    public ?string $uid;
    public ?string $name;
    public ?string $mail;
    public ?string $key;
    public function __construct(string $uid, string $name, string $mail, string $key)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->mail = $mail;
        $this->key = $key;
    }
}
