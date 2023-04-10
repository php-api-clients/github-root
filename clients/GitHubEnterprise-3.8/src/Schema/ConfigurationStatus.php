<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ConfigurationStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"progress":{"type":"array","items":{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null","progress":[{"status":"generated_status_null","key":"generated_key_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus\Progress> $progress
     */
    public function __construct(public ?string $status, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ConfigurationStatus\Progress::class)] public ?array $progress)
    {
    }
}
