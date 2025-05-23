<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet59F0267E\TietC73BF8F8\Tiet6FA64CCD;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietE48B252D
{
    public const SCHEMA_JSON         = '{
    "title": "PullRequestAutoMerge",
    "required": [
        "enabled_by",
        "merge_method",
        "commit_title",
        "commit_message"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "commit_message": {
            "type": [
                "string",
                "null"
            ],
            "description": "Commit message for the merge commit."
        },
        "commit_title": {
            "type": "string",
            "description": "Title for the merge commit message."
        },
        "enabled_by": {
            "title": "User",
            "required": [
                "login",
                "id"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "deleted": {
                    "type": "boolean"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gists_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string",
                    "format": "uri"
                },
                "received_events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "enum": [
                        "Bot",
                        "User",
                        "Organization"
                    ],
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "merge_method": {
            "enum": [
                "merge",
                "squash",
                "rebase"
            ],
            "type": "string",
            "description": "The merge method to use."
        }
    },
    "description": "The status of auto merging a pull request."
}';
    public const SCHEMA_TITLE        = 'PullRequestAutoMerge';
    public const SCHEMA_DESCRIPTION  = 'The status of auto merging a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "commit_message": "generated",
    "commit_title": "generated",
    "enabled_by": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Organization",
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    },
    "merge_method": "rebase"
}';

    /**
     * commitMessage: Commit message for the merge commit.
     * commitTitle: Title for the merge commit message.
     * mergeMethod: The merge method to use.
     */
    public function __construct(#[MapFrom('commit_message')]
    public string|null $commitMessage, #[MapFrom('commit_title')]
    public string $commitTitle, #[MapFrom('enabled_by')]
    public Schema\WebhookPullRequestReviewThreadUnresolved\PullRequest\AutoMerge\EnabledBy|null $enabledBy, #[MapFrom('merge_method')]
    public string $mergeMethod,)
    {
    }
}
