<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enforcement":{"enum":["enabled","disabled","testing"],"type":"string","description":"The state of enforcement for the hook on this repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enforcement":"enabled"}';
    /**
     * enforcement: The state of enforcement for the hook on this repository.
     */
    public function __construct(public ?string $enforcement)
    {
    }
}
