<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class CodeScanningRef
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The full Git reference, formatted as `refs/heads/<branch name>`,
`refs/pull/<number>/merge`, or `refs/pull/<number>/head`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
