<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enforcement":{"enum":["enabled","disabled","testing"],"type":"string","description":"The state of enforcement for the hook on this repository."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enforcement":"enabled"}';

    /**
     * enforcement: The state of enforcement for the hook on this repository.
     */
    public function __construct(public ?string $enforcement)
    {
    }
}
