<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationPullRequestBody
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pull_request_body_url"
    ],
    "type": "object",
    "properties": {
        "pull_request_body_url": {
            "type": "string",
            "description": "The API URL to get the pull request where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846"
            ]
        }
    },
    "description": "Represents a \'pull_request_body\' secret scanning location type. This location type shows that a secret was detected in the body of a pull request."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'pull_request_body\' secret scanning location type. This location type shows that a secret was detected in the body of a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "pull_request_body_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846"
}';

    /**
     * pullRequestBodyUrl: The API URL to get the pull request where the secret was detected.
     */
    public function __construct(#[MapFrom('pull_request_body_url')]
    public string $pullRequestBodyUrl,)
    {
    }
}
