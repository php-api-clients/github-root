<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningLocationPullRequestTitle implements \ApiClients\Client\GitHub\Contract\SecretScanningLocationPullRequestTitle
{
    const SCHEMA_JSON = '{
    "required": [
        "pull_request_title_url"
    ],
    "type": "object",
    "properties": {
        "pull_request_title_url": {
            "type": "string",
            "description": "The API URL to get the pull request where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/2846"
            ]
        }
    },
    "description": "Represents a \'pull_request_title\' secret scanning location type. This location type shows that a secret was detected in the title of a pull request."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents a \'pull_request_title\' secret scanning location type. This location type shows that a secret was detected in the title of a pull request.';
    const SCHEMA_EXAMPLE_DATA = '{
    "pull_request_title_url": "https:\\/\\/example.com\\/"
}';
    /**
     * pullRequestTitleUrl: The API URL to get the pull request where the secret was detected.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('pull_request_title_url')] public string $pullRequestTitleUrl)
    {
    }
}
