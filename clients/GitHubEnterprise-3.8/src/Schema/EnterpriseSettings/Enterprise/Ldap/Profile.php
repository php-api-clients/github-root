<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap;

final readonly class Profile
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"uid":"generated_uid_null","name":"generated_name_null","mail":"generated_mail_null","key":"generated_key_null"}';

    public function __construct(public ?string $uid, public ?string $name, public ?string $mail, public ?string $key)
    {
    }
}
