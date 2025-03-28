<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class CodeScanningAnalysisEnvironment
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "Identifies the variable values associated with the environment in which this analysis was performed."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Identifies the variable values associated with the environment in which this analysis was performed.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
