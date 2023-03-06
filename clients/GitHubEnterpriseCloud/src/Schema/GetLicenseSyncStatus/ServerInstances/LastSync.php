<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class LastSync
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date","status":"generated_status","error":"generated_error"}';
    public function __construct(public ?string $date, public ?string $status, public ?string $error)
    {
    }
}
