<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningBypassRequest;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "secret_type": {
            "type": "string",
            "description": "The type of secret that secret scanning detected."
        },
        "bypass_reason": {
            "enum": [
                "used_in_tests",
                "false_positive",
                "fix_later"
            ],
            "type": "string",
            "description": "The reason the bypass was requested."
        },
        "path": {
            "type": "string",
            "description": "The path in the repo where the secret was located during the request."
        },
        "branch": {
            "type": "string",
            "description": "The branch in the repo where the secret was located during the request."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "secret_type": "generated",
    "bypass_reason": "used_in_tests",
    "path": "generated",
    "branch": "generated"
}';

    /**
     * secretType: The type of secret that secret scanning detected.
     * bypassReason: The reason the bypass was requested.
     * path: The path in the repo where the secret was located during the request.
     * branch: The branch in the repo where the secret was located during the request.
     */
    public function __construct(#[MapFrom('secret_type')]
    public string|null $secretType, #[MapFrom('bypass_reason')]
    public string|null $bypassReason, public string|null $path, public string|null $branch,)
    {
    }
}
