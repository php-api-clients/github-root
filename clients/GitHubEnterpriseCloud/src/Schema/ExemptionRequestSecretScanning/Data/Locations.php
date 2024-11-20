<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ExemptionRequestSecretScanning\Data;

final readonly class Locations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "commit": {
            "type": "string",
            "description": "The commit SHA where the secret was detected"
        },
        "branch": {
            "type": "string",
            "description": "The branch where the secret was detected"
        },
        "path": {
            "type": "string",
            "description": "The path of the file where the secret was detected"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "commit": "generated",
    "branch": "generated",
    "path": "generated"
}';

    /**
     * commit: The commit SHA where the secret was detected
     * branch: The branch where the secret was detected
     * path: The path of the file where the secret was detected
     */
    public function __construct(public string|null $commit, public string|null $branch, public string|null $path)
    {
    }
}
