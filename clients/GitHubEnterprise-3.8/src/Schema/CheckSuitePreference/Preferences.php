<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\CheckSuitePreference;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"auto_trigger_checks":[{"app_id":13,"setting":false}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\CheckSuitePreference\Preferences\AutoTriggerChecks> $auto_trigger_checks
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\CheckSuitePreference\Preferences\AutoTriggerChecks::class)] public ?array $auto_trigger_checks)
    {
    }
}
