<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet7041333D\Tiet2B9B5CD7\Tiet6273FDFD;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet58068E3B
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
    public function __construct(public Schema\Link $comments, public Schema\Link $commits, public Schema\Link $statuses, public Schema\Link $html, public Schema\Link $issue, #[MapFrom('review_comments')]
    public Schema\Link $reviewComments, #[MapFrom('review_comment')]
    public Schema\Link $reviewComment, public Schema\Link $self,)
    {
    }
}
