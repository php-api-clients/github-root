<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SelectedActions
{
    public const SCHEMA_JSON         = '{
    "required": [
        "github_owned_allowed",
        "patterns_allowed"
    ],
    "type": "object",
    "properties": {
        "github_owned_allowed": {
            "type": "boolean",
            "description": "Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization."
        },
        "patterns_allowed": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa\\/octocat@*`, `monalisa\\/octocat@v2`, `monalisa\\/*`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "github_owned_allowed": false,
    "patterns_allowed": [
        "generated",
        "generated"
    ]
}';

    /**
     * githubOwnedAllowed: Whether GitHub-owned actions are allowed. For example, this includes the actions in the `actions` organization.
     * patternsAllowed: Specifies a list of string-matching patterns to allow specific action(s). Wildcards, tags, and SHAs are allowed. For example, `monalisa/octocat@*`, `monalisa/octocat@v2`, `monalisa/*`.
     */
    public function __construct(#[MapFrom('github_owned_allowed')]
    public bool $githubOwnedAllowed, #[MapFrom('patterns_allowed')]
    public array $patternsAllowed,)
    {
    }
}
