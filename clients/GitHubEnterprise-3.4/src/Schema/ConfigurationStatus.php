<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus\Progress;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class ConfigurationStatus
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"type":"string"},"progress":{"type":"array","items":{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null","progress":[{"status":"generated_status_null","key":"generated_key_null"}]}';

    /**
     * @param ?array<Progress> $progress
     */
    public function __construct(public ?string $status, #[CastListToType(Schema\ConfigurationStatus\Progress::class)] public ?array $progress)
    {
    }
}
