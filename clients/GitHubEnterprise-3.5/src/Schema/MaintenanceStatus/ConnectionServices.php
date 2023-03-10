<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ConnectionServices
{
    public const SCHEMA_JSON = '{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","number":13}';
    public function __construct(public string $name, public int $number)
    {
    }
}
