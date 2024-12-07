<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7041333D\T2B9B5CD7\T6273FDFD;

abstract readonly class T58068E3B implements \ApiClients\Client\GitHub\Contract\PullRequestSimple\Links
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
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
    public function __construct(public \ApiClients\Client\GitHub\Schema\Link $comments, public \ApiClients\Client\GitHub\Schema\Link $commits, public \ApiClients\Client\GitHub\Schema\Link $statuses, public \ApiClients\Client\GitHub\Schema\Link $html, public \ApiClients\Client\GitHub\Schema\Link $issue, #[\EventSauce\ObjectHydrator\MapFrom('review_comments')] public \ApiClients\Client\GitHub\Schema\Link $reviewComments, #[\EventSauce\ObjectHydrator\MapFrom('review_comment')] public \ApiClients\Client\GitHub\Schema\Link $reviewComment, public \ApiClients\Client\GitHub\Schema\Link $self)
    {
    }
}
