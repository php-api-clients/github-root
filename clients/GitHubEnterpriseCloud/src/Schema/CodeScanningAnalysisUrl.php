<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class CodeScanningAnalysisUrl
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The REST API URL of the analysis resource.",
    "format": "uri",
    "readOnly": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The REST API URL of the analysis resource.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
