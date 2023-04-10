<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GetLicenseSyncStatus\ServerInstances;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class LastSync
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"status":{"type":"string"},"error":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date_null","status":"generated_status_null","error":"generated_error_null"}';
    public function __construct(public ?string $date, public ?string $status, public ?string $error)
    {
    }
}
