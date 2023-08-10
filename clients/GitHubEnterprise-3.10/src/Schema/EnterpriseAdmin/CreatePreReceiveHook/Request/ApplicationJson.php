<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreatePreReceiveHook\Request;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["name","script","script_repository","environment"],"type":"object","properties":{"name":{"type":"string","description":"The name of the hook."},"script":{"type":"string","description":"The script that the hook runs."},"script_repository":{"type":"object","properties":{},"description":"The GitHub repository where the script is kept.","additionalProperties":true},"environment":{"type":"object","properties":{},"description":"The pre-receive environment where the script is executed.","additionalProperties":true},"enforcement":{"type":"string","description":"The state of enforcement for this hook. default: `disabled`"},"allow_downstream_configuration":{"type":"boolean","description":"Whether enforcement can be overridden at the org or repo level. default: `false`"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","script":"generated","script_repository":[],"environment":[],"enforcement":"generated","allow_downstream_configuration":false}';

    /**
     * name: The name of the hook.
     * script: The script that the hook runs.
     * scriptRepository: The GitHub repository where the script is kept.
     * environment: The pre-receive environment where the script is executed.
     * enforcement: The state of enforcement for this hook. default: `disabled`
     * allowDownstreamConfiguration: Whether enforcement can be overridden at the org or repo level. default: `false`
     */
    public function __construct(public string $name, public string $script, #[MapFrom('script_repository')]
    public Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\ApplicationJson\ScriptRepository $scriptRepository, public Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\ApplicationJson\Environment $environment, public string|null $enforcement, #[MapFrom('allow_downstream_configuration')]
    public bool|null $allowDownstreamConfiguration,)
    {
    }
}
