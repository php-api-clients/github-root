<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances;

final readonly class LastSync
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated","status":"generated","error":"generated"}';

    public function __construct(public string|null $date, public string|null $status, public string|null $error)
    {
    }
}
