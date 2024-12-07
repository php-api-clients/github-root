<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7041333D\T2B9B5CD7\T6273FDFD;

use ApiClients\Client\GitHub\Contract\PullRequestSimple\Links;
use ApiClients\Client\GitHub\Schema\Link;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T58068E3B implements Links
{
    public const SCHEMA_JSON         = '{
    "required": [
        "comments",
        "commits",
        "statuses",
        "html",
        "issue",
        "review_comments",
        "review_comment",
        "self"
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
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "commits": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "statuses": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "issue": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "review_comments": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "review_comment": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "self": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
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
    "statuses": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    },
    "issue": {
        "href": "generated"
    },
    "review_comments": {
        "href": "generated"
    },
    "review_comment": {
        "href": "generated"
    },
    "self": {
        "href": "generated"
    }
}';

    /**
     * comments: Hypermedia Link
     * commits: Hypermedia Link
     * statuses: Hypermedia Link
     * html: Hypermedia Link
     * issue: Hypermedia Link
     * reviewComments: Hypermedia Link
     * reviewComment: Hypermedia Link
     * self: Hypermedia Link
     */
    public function __construct(public Link $comments, public Link $commits, public Link $statuses, public Link $html, public Link $issue, #[MapFrom('review_comments')]
    public Link $reviewComments, #[MapFrom('review_comment')]
    public Link $reviewComment, public Link $self,)
    {
    }
}
