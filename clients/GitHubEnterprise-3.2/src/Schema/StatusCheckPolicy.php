<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class StatusCheckPolicy
{
    public const SCHEMA_JSON         = '{
    "title": "Status Check Policy",
    "required": [
        "url",
        "contexts_url",
        "strict",
        "contexts"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"
            ]
        },
        "strict": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "contexts": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "continuous-integration\\/travis-ci"
            ]
        },
        "contexts_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"
            ]
        }
    },
    "description": "Status Check Policy"
}';
    public const SCHEMA_TITLE        = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION  = 'Status Check Policy';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks",
    "strict": true,
    "contexts": [
        "continuous-integration\\/travis-ci",
        "continuous-integration\\/travis-ci"
    ],
    "contexts_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"
}';

    public function __construct(public string $url, public bool $strict, public array $contexts, #[MapFrom('contexts_url')]
    public string $contextsUrl,)
    {
    }
}
