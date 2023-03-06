<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreatePreReceiveHook\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name","script","script_repository","environment"],"type":"object","properties":{"name":{"type":"string","description":"The name of the hook."},"script":{"type":"string","description":"The script that the hook runs."},"script_repository":{"type":"object","properties":{},"description":"The GitHub repository where the script is kept.","additionalProperties":true},"environment":{"type":"object","properties":{},"description":"The pre-receive environment where the script is executed.","additionalProperties":true},"enforcement":{"type":"string","description":"The state of enforcement for this hook. default: `disabled`"},"allow_downstream_configuration":{"type":"boolean","description":"Whether enforcement can be overridden at the org or repo level. default: `false`"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","script":"generated_script","script_repository":[],"environment":[],"enforcement":"generated_enforcement","allow_downstream_configuration":false}';
    /**
     * name: The name of the hook.
     * script: The script that the hook runs.
     * script_repository: The GitHub repository where the script is kept.
     * environment: The pre-receive environment where the script is executed.
     * enforcement: The state of enforcement for this hook. default: `disabled`
     * allow_downstream_configuration: Whether enforcement can be overridden at the org or repo level. default: `false`
     */
    public function __construct(public ?string $name, public ?string $script, public ?Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\ScriptRepository $script_repository, public ?Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\Environment $environment, public string $enforcement, public bool $allow_downstream_configuration)
    {
    }
}
