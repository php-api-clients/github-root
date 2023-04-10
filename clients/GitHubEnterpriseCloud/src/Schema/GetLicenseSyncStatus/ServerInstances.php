<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ServerInstances
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"server_id":{"type":"string"},"hostname":{"type":"string"},"last_sync":{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"server_id":"generated_server_id_null","hostname":"generated_hostname_null","last_sync":{"date":"generated_date_null","status":"generated_status_null","error":"generated_error_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('server_id')] public ?string $serverId, public ?string $hostname, #[\EventSauce\ObjectHydrator\MapFrom('last_sync')] public ?Schema\GetLicenseSyncStatus\ServerInstances\LastSync $lastSync)
    {
    }
}
