<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\GitCommit\Author;
use ApiClients\Client\GitHub\Schema\GitCommit\Committer;
use ApiClients\Client\GitHub\Schema\GitCommit\Tree;
use ApiClients\Client\GitHub\Schema\GitCommit\Verification;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GitCommit implements \ApiClients\Client\GitHub\Contract\GitCommit
{
    public const SCHEMA_JSON         = '{
    "title": "Git Commit",
    "required": [
        "sha",
        "node_id",
        "url",
        "html_url",
        "author",
        "committer",
        "tree",
        "message",
        "parents",
        "verification"
    ],
    "type": "object",
    "properties": {
        "sha": {
            "type": "string",
            "description": "SHA for the commit",
            "examples": [
                "7638417db6d59f3c431d3e1f261cc637155684cd"
            ]
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "author": {
            "required": [
                "email",
                "name",
                "date"
            ],
            "type": "object",
            "properties": {
                "date": {
                    "type": "string",
                    "description": "Timestamp of the commit",
                    "format": "date-time",
                    "examples": [
                        "2014-08-09T08:02:04+12:00"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the user",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "Name of the git user",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                }
            },
            "description": "Identifying information for the git-user"
        },
        "committer": {
            "required": [
                "email",
                "name",
                "date"
            ],
            "type": "object",
            "properties": {
                "date": {
                    "type": "string",
                    "description": "Timestamp of the commit",
                    "format": "date-time",
                    "examples": [
                        "2014-08-09T08:02:04+12:00"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the user",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "Name of the git user",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                }
            },
            "description": "Identifying information for the git-user"
        },
        "message": {
            "type": "string",
            "description": "Message describing the purpose of the commit",
            "examples": [
                "Fix #42"
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
                    "description": "SHA for the commit",
                    "examples": [
                        "7638417db6d59f3c431d3e1f261cc637155684cd"
                    ]
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "parents": {
            "type": "array",
            "items": {
                "required": [
                    "sha",
                    "url",
                    "html_url"
                ],
                "type": "object",
                "properties": {
                    "sha": {
                        "type": "string",
                        "description": "SHA for the commit",
                        "examples": [
                            "7638417db6d59f3c431d3e1f261cc637155684cd"
                        ]
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "html_url": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            }
        },
        "verification": {
            "required": [
                "verified",
                "reason",
                "signature",
                "payload"
            ],
            "type": "object",
            "properties": {
                "verified": {
                    "type": "boolean"
                },
                "reason": {
                    "type": "string"
                },
                "signature": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "payload": {
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
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "Low-level Git commit operations within a repository"
}';
    public const SCHEMA_TITLE        = 'Git Commit';
    public const SCHEMA_DESCRIPTION  = 'Low-level Git commit operations within a repository';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sha": "generated",
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "author": {
        "date": "1970-01-01T00:00:00+00:00",
        "email": "generated",
        "name": "generated"
    },
    "committer": {
        "date": "1970-01-01T00:00:00+00:00",
        "email": "generated",
        "name": "generated"
    },
    "message": "generated",
    "tree": {
        "sha": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "parents": [
        {
            "sha": "generated",
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        },
        {
            "sha": "generated",
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/"
        }
    ],
    "verification": {
        "verified": false,
        "reason": "generated",
        "signature": "generated",
        "payload": "generated",
        "verified_at": "generated"
    },
    "html_url": "https:\\/\\/example.com\\/"
}';

    /**
     * sha: SHA for the commit
     * author: Identifying information for the git-user
     * committer: Identifying information for the git-user
     * message: Message describing the purpose of the commit
     */
    public function __construct(public string $sha, #[MapFrom('node_id')]
    public string $nodeId, public string $url, public Author $author, public Committer $committer, public string $message, public Tree $tree, public array $parents, public Verification $verification, #[MapFrom('html_url')]
    public string $htmlUrl,)
    {
    }
}
