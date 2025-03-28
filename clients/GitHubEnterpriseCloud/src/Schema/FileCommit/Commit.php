<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Commit
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(public string|null $sha, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, public Schema\FileCommit\Commit\Author|null $author, public Schema\FileCommit\Commit\Committer|null $committer, public string|null $message, public Schema\FileCommit\Commit\Tree|null $tree, public array|null $parents, public Schema\FileCommit\Commit\Verification|null $verification,)
    {
    }
}
