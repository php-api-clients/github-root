<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PullRequestReviewComment;

final readonly class Links implements \ApiClients\Client\GitHub\Contract\PullRequestReviewComment\Links
{
    const SCHEMA_JSON = '{
    "required": [
        "self",
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "self": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"
                    ]
                }
            }
        },
        "html": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"
                    ]
                }
            }
        },
        "pull_request": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "self": {
        "href": "https:\\/\\/example.com\\/"
    },
    "html": {
        "href": "https:\\/\\/example.com\\/"
    },
    "pull_request": {
        "href": "https:\\/\\/example.com\\/"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\Self_ $self, public \ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public \ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\PullRequest $pullRequest)
    {
    }
}
