<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServerInstances
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"server_id":{"type":"string"},"hostname":{"type":"string"},"last_sync":{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"server_id":"generated","hostname":"generated","last_sync":{"date":"generated","status":"generated","error":"generated"}}';

    public function __construct(#[MapFrom('server_id')]
    public string|null $serverId, public string|null $hostname, #[MapFrom('last_sync')]
    public Schema\GetLicenseSyncStatus\ServerInstances\LastSync|null $lastSync,)
    {
    }
}
