<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["runners"],"type":"object","properties":{"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"runners":[13]}';
    /**
     * runners: List of runner IDs to add to the runner group.
     * @param array<int> $runners
     */
    public function __construct(public array $runners)
    {
    }
}
