<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6B1B7663\TE4F5DE6D\T0BE24B99;

abstract readonly class TCC56D255 implements \ApiClients\Client\GitHub\Contract\WebhooksPullRequest5\Links
{
    const SCHEMA_JSON = '{
    "required": [
        "self",
        "html",
        "issue",
        "comments",
        "review_comments",
        "review_comment",
        "commits",
        "statuses"
    ],
    "type": "object",
    "properties": {
        "comments": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "commits": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "issue": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "review_comment": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "review_comments": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "self": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "statuses": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "comments": {
        "href": "generated"
    },
    "commits": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    },
    "issue": {
        "href": "generated"
    },
    "review_comment": {
        "href": "generated"
    },
    "review_comments": {
        "href": "generated"
    },
    "self": {
        "href": "generated"
    },
    "statuses": {
        "href": "generated"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Comments $comments, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Commits $commits, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Html $html, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Issue $issue, #[\EventSauce\ObjectHydrator\MapFrom('review_comment')] public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComment $reviewComment, #[\EventSauce\ObjectHydrator\MapFrom('review_comments')] public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComments $reviewComments, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Self_ $self, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Statuses $statuses)
    {
    }
}
