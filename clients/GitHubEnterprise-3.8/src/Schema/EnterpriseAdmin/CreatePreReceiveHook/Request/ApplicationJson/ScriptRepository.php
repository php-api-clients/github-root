<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreatePreReceiveHook\Request\ApplicationJson;

final readonly class ScriptRepository
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{},"description":"The GitHub repository where the script is kept.","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The GitHub repository where the script is kept.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
