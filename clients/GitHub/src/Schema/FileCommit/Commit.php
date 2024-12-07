<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

final readonly class Commit implements \ApiClients\Client\GitHub\Contract\FileCommit\Commit
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "sha": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "author": {
            "type": "object",
            "properties": {
                "date": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "email": {
                    "type": "string"
                }
            }
        },
        "committer": {
            "type": "object",
            "properties": {
                "date": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "email": {
                    "type": "string"
                }
            }
        },
        "message": {
            "type": "string"
        },
        "tree": {
            "type": "object",
            "properties": {
                "url": {
                    "type": "string"
                },
                "sha": {
                    "type": "string"
                }
            }
        },
        "parents": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "url": {
                        "type": "string"
                    },
                    "html_url": {
                        "type": "string"
                    },
                    "sha": {
                        "type": "string"
                    }
                }
            }
        },
        "verification": {
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
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "sha": "generated",
    "node_id": "generated",
    "url": "generated",
    "html_url": "generated",
    "author": {
        "date": "generated",
        "name": "generated",
        "email": "generated"
    },
    "committer": {
        "date": "generated",
        "name": "generated",
        "email": "generated"
    },
    "message": "generated",
    "tree": {
        "url": "generated",
        "sha": "generated"
    },
    "parents": [
        {
            "url": "generated",
            "html_url": "generated",
            "sha": "generated"
        },
        {
            "url": "generated",
            "html_url": "generated",
            "sha": "generated"
        }
    ],
    "verification": {
        "verified": false,
        "reason": "generated",
        "signature": "generated",
        "payload": "generated",
        "verified_at": "generated"
    }
}';
    public function __construct(public ?string $sha, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author $author, public ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer $committer, public ?string $message, public ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree $tree, public ?array $parents, public ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification $verification)
    {
    }
}
