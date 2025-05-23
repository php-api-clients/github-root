<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class CodeScanningRefFull
{
    public const SCHEMA_JSON         = '{
    "pattern": "^refs\\/(heads|tags|pull)\\/.*$",
    "type": "string",
    "description": "The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/tags\\/<tag>`, `refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`.",
    "examples": [
        "refs\\/heads\\/main"
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The full Git reference, formatted as `refs/heads/<branch name>`,
`refs/tags/<tag>`, `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
