<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\SimpleCommit\Author;
use ApiClients\Client\GitHub\Schema\SimpleCommit\Committer;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleCommit implements \ApiClients\Client\GitHub\Contract\SimpleCommit
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Commit",
    "required": [
        "id",
        "tree_id",
        "message",
        "timestamp",
        "author",
        "committer"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "SHA for the commit",
            "examples": [
                "7638417db6d59f3c431d3e1f261cc637155684cd"
            ]
        },
        "tree_id": {
            "type": "string",
            "description": "SHA for the commit\'s tree"
        },
        "message": {
            "type": "string",
            "description": "Message describing the purpose of the commit",
            "examples": [
                "Fix #42"
            ]
        },
        "timestamp": {
            "type": "string",
            "description": "Timestamp of the commit",
            "format": "date-time",
            "examples": [
                "2014-08-09T08:02:04+12:00"
            ]
        },
        "author": {
            "required": [
                "name",
                "email"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "name": {
                    "type": "string",
                    "description": "Name of the commit\'s author",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the commit\'s author",
                    "format": "email",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                }
            },
            "description": "Information about the Git author"
        },
        "committer": {
            "required": [
                "name",
                "email"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "name": {
                    "type": "string",
                    "description": "Name of the commit\'s committer",
                    "examples": [
                        "Monalisa Octocat"
                    ]
                },
                "email": {
                    "type": "string",
                    "description": "Git email address of the commit\'s committer",
                    "format": "email",
                    "examples": [
                        "monalisa.octocat@example.com"
                    ]
                }
            },
            "description": "Information about the Git committer"
        }
    },
    "description": "A commit."
}';
    public const SCHEMA_TITLE        = 'Simple Commit';
    public const SCHEMA_DESCRIPTION  = 'A commit.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "tree_id": "generated",
    "message": "generated",
    "timestamp": "1970-01-01T00:00:00+00:00",
    "author": {
        "name": "generated",
        "email": "hi@example.com"
    },
    "committer": {
        "name": "generated",
        "email": "hi@example.com"
    }
}';

    /**
     * id: SHA for the commit
     * treeId: SHA for the commit's tree
     * message: Message describing the purpose of the commit
     * timestamp: Timestamp of the commit
     * author: Information about the Git author
     * committer: Information about the Git committer
     */
    public function __construct(public string $id, #[MapFrom('tree_id')]
    public string $treeId, public string $message, public string $timestamp, public Author|null $author, public Committer|null $committer,)
    {
    }
}
