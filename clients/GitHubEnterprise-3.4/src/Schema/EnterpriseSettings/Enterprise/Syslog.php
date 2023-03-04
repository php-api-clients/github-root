<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Syslog
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"server":"generated_server","protocol_name":"generated_protocol_name"}';
    public ?bool $enabled;
    public ?string $server;
    public ?string $protocol_name;
    public function __construct(bool $enabled, string $server, string $protocol_name)
    {
        $this->enabled = $enabled;
        $this->server = $server;
        $this->protocol_name = $protocol_name;
    }
}
