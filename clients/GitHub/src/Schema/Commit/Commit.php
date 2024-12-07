<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Commit;

use ApiClients\Client\GitHub\Schema\Commit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\GitUser;
use ApiClients\Client\GitHub\Schema\Verification;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Commit implements \ApiClients\Client\GitHub\Contract\Commit\Commit
{
    public const SCHEMA_JSON         = '{
    "required": [
        "author",
        "committer",
        "comment_count",
        "message",
        "tree",
        "url"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"
            ]
        },
        "author": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Git User",
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string",
                            "examples": [
                                "\\"Chris Wanstrath\\""
                            ]
                        },
                        "email": {
                            "type": "string",
                            "examples": [
                                "\\"chris@ozmm.org\\""
                            ]
                        },
                        "date": {
                            "type": "string",
                            "examples": [
                                "\\"2007-10-29T02:42:39.000-07:00\\""
                            ]
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                }
            ]
        },
        "committer": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Git User",
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string",
                            "examples": [
                                "\\"Chris Wanstrath\\""
                            ]
                        },
                        "email": {
                            "type": "string",
                            "examples": [
                                "\\"chris@ozmm.org\\""
                            ]
                        },
                        "date": {
                            "type": "string",
                            "examples": [
                                "\\"2007-10-29T02:42:39.000-07:00\\""
                            ]
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                }
            ]
        },
        "message": {
            "type": "string",
            "examples": [
                "Fix all the bugs"
            ]
        },
        "comment_count": {
            "type": "integer",
            "examples": [
                0
            ]
        },
        "tree": {
            "required": [
                "sha",
                "url"
            ],
            "type": "object",
            "properties": {
                "sha": {
                    "type": "string",
                    "examples": [
                        "827efc6d56897b048c772eb4087f854f46256132"
                    ]
                },
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"
                    ]
                }
            }
        },
        "verification": {
            "title": "Verification",
            "required": [
                "verified",
                "reason",
                "payload",
                "signature"
            ],
            "type": "object",
            "properties": {
                "verified": {
                    "type": "boolean"
                },
                "reason": {
                    "type": "string"
                },
                "payload": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "signature": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "verified_at": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "author": {
        "name": "generated",
        "email": "generated",
        "date": "generated"
    },
    "committer": {
        "name": "generated",
        "email": "generated",
        "date": "generated"
    },
    "message": "generated",
    "comment_count": 13,
    "tree": {
        "sha": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "verification": {
        "verified": false,
        "reason": "generated",
        "payload": "generated",
        "signature": "generated",
        "verified_at": "generated"
    }
}';

    public function __construct(public string $url, public GitUser|null $author, public GitUser|null $committer, public string $message, #[MapFrom('comment_count')]
    public int $commentCount, public Tree $tree, public Verification|null $verification,)
    {
    }
}
