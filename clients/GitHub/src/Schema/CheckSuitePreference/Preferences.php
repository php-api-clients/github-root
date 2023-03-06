<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckSuitePreference;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"auto_trigger_checks":[{"app_id":13,"setting":false}]}';
    /**
     * @var array<Schema\CheckSuitePreference\Preferences\AutoTriggerChecks>
     */
    public ?array $auto_trigger_checks;
    public function __construct(array $auto_trigger_checks)
    {
        $this->auto_trigger_checks = $auto_trigger_checks;
    }
}
