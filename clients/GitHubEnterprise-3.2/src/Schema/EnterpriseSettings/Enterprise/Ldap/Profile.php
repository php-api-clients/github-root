<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseSettings\Enterprise\Ldap;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Profile
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"uid":"generated_uid_null","name":"generated_name_null","mail":"generated_mail_null","key":"generated_key_null"}';
    public function __construct(public ?string $uid, public ?string $name, public ?string $mail, public ?string $key)
    {
    }
}
