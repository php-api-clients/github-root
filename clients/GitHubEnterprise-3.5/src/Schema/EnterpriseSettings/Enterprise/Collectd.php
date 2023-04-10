<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Collectd
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"port":{"type":"integer"},"encryption":{"type":["string","null"]},"username":{"type":["string","null"]},"password":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"server":"generated_server_null","port":13,"encryption":"generated_encryption_null","username":"generated_username_null","password":"generated_password_null"}';
    public function __construct(public ?bool $enabled, public ?string $server, public ?int $port, public ?string $encryption, public ?string $username, public ?string $password)
    {
    }
}
