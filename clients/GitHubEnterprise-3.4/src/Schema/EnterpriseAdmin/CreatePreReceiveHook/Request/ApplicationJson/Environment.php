<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\ApplicationJson;

final readonly class Environment
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{},"description":"The pre-receive environment where the script is executed.","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The pre-receive environment where the script is executed.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
