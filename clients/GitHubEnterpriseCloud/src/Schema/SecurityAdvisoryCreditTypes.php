<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class SecurityAdvisoryCreditTypes
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "analyst",
        "finder",
        "reporter",
        "coordinator",
        "remediation_developer",
        "remediation_reviewer",
        "remediation_verifier",
        "tool",
        "sponsor",
        "other"
    ],
    "type": "string",
    "description": "The type of credit the user is receiving."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The type of credit the user is receiving.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
