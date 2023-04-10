<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseSettings\Enterprise\Ldap;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Reconciliation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"user":"generated_user_null","org":"generated_org_null"}';
    public function __construct(public ?string $user, public ?string $org)
    {
    }
}
