<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ConfigurationStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"progress":{"type":"array","items":{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null","progress":[{"status":"generated_status_null","key":"generated_key_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\ConfigurationStatus\Progress> $progress
     */
    public function __construct(public ?string $status, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ConfigurationStatus\Progress::class)] public ?array $progress)
    {
    }
}
