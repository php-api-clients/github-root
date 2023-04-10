<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Syslog
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"server":"generated_server_null","protocol_name":"generated_protocol_name_null"}';
    public function __construct(public ?bool $enabled, public ?string $server, #[\EventSauce\ObjectHydrator\MapFrom('protocol_name')] public ?string $protocolName)
    {
    }
}
