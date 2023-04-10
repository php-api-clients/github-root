<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\MaintenanceStatus;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ConnectionServices
{
    public const SCHEMA_JSON = '{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","number":13}';
    public function __construct(public string $name, public int $number)
    {
    }
}
