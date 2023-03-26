<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class GetLicenseSyncStatus
{
    public const SCHEMA_JSON = '{"title":"License Sync Status","properties":{"server_instances":{"type":"array","items":{"type":"object","properties":{"server_id":{"type":"string"},"hostname":{"type":"string"},"last_sync":{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}}}}},"description":"Information about the status of a license sync job for an enterprise."}';
    public const SCHEMA_TITLE = 'License Sync Status';
    public const SCHEMA_DESCRIPTION = 'Information about the status of a license sync job for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{"server_instances":[{"server_id":"generated_server_id_null","hostname":"generated_hostname_null","last_sync":{"date":"generated_date_null","status":"generated_status_null","error":"generated_error_null"}}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances> $serverInstances
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('server_instances')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GetLicenseSyncStatus\ServerInstances::class)] public ?array $serverInstances)
    {
    }
}
