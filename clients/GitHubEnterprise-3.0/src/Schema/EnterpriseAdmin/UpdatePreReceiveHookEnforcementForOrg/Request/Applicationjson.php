<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enforcement":{"type":"string","description":"The state of enforcement for the hook on this repository."},"allow_downstream_configuration":{"type":"boolean","description":"Whether repositories can override enforcement."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enforcement":"generated_enforcement_null","allow_downstream_configuration":false}';
    /**
     * enforcement: The state of enforcement for the hook on this repository.
     * allowDownstreamConfiguration: Whether repositories can override enforcement.
     */
    public function __construct(public ?string $enforcement, #[\EventSauce\ObjectHydrator\MapFrom('allow_downstream_configuration')] public ?bool $allowDownstreamConfiguration)
    {
    }
}
