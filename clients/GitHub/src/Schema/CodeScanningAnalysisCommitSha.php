<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAnalysisCommitSha
{
    public const SCHEMA_JSON         = '{
    "maxLength": 40,
    "minLength": 40,
    "pattern": "^[0-9a-fA-F]+$",
    "type": "string",
    "description": "The SHA of the commit to which the analysis you are uploading relates."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The SHA of the commit to which the analysis you are uploading relates.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
