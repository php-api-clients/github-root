<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6B1B7663\TE4F5DE6D\T0BE24B99;

use ApiClients\Client\GitHub\Contract\WebhooksPullRequest5\Links;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Comments;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Commits;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Html;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Issue;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComment;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComments;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Self_;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Statuses;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TCC56D255 implements Links
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(public Comments $comments, public Commits $commits, public Html $html, public Issue $issue, #[MapFrom('review_comment')]
    public ReviewComment $reviewComment, #[MapFrom('review_comments')]
    public ReviewComments $reviewComments, public Self_ $self, public Statuses $statuses,)
    {
    }
}
