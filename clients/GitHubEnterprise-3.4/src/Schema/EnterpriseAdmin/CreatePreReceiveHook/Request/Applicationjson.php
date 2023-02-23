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
     * The name of the hook.
     */
    public ?string $name;
    /**
     * The script that the hook runs.
     */
    public ?string $script;
    /**
     * The GitHub repository where the script is kept.
     */
    public ?Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\ScriptRepository $script_repository;
    /**
     * The pre-receive environment where the script is executed.
     */
    public ?Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\Environment $environment;
    /**
     * The state of enforcement for this hook. default: `disabled`
     */
    public string $enforcement;
    /**
     * Whether enforcement can be overridden at the org or repo level. default: `false`
     */
    public bool $allow_downstream_configuration;
    public function __construct(string $name, string $script, Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\ScriptRepository $script_repository, Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\Applicationjson\Environment $environment, string $enforcement, bool $allow_downstream_configuration)
    {
        $this->name = $name;
        $this->script = $script;
        $this->script_repository = $script_repository;
        $this->environment = $environment;
        $this->enforcement = $enforcement;
        $this->allow_downstream_configuration = $allow_downstream_configuration;
    }
}
