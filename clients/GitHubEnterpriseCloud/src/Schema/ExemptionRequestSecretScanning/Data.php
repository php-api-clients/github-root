<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ExemptionRequestSecretScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "secret_type": {
            "type": "string",
            "description": "The type of secret that was detected"
        },
        "commits": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The commits that introduced the secret"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "secret_type": "generated",
    "commits": [
        "generated",
        "generated"
    ]
}';

    /**
     * secretType: The type of secret that was detected
     * commits: The commits that introduced the secret
     */
    public function __construct(#[MapFrom('secret_type')]
    public string|null $secretType, public array|null $commits,)
    {
    }
}
