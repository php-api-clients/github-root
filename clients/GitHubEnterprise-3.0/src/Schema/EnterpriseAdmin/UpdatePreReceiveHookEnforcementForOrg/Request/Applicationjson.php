<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enforcement":{"type":"string","description":"The state of enforcement for the hook on this repository."},"allow_downstream_configuration":{"type":"boolean","description":"Whether repositories can override enforcement."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enforcement":"generated_enforcement","allow_downstream_configuration":false}';
    /**
     * The state of enforcement for the hook on this repository.
     */
    public ?string $enforcement;
    /**
     * Whether repositories can override enforcement.
     */
    public ?bool $allow_downstream_configuration;
    public function __construct(string $enforcement, bool $allow_downstream_configuration)
    {
        $this->enforcement = $enforcement;
        $this->allow_downstream_configuration = $allow_downstream_configuration;
    }
}
