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
    public const SCHEMA_EXAMPLE_DATA = '{"server_id":"generated_server_id","hostname":"generated_hostname","last_sync":{"date":"generated_date","status":"generated_status","error":"generated_error"}}';
    public function __construct(public ?string $server_id, public ?string $hostname, public ?Schema\GetLicenseSyncStatus\ServerInstances\LastSync $last_sync)
    {
    }
}
