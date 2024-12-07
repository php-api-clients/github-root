<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TC4E7FC39\T11CB7379\TF21F84C0;

use ApiClients\Client\GitHub\Contract\GitCommit\Tree;

abstract readonly class T104418A5 implements Tree
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * sha: SHA for the commit
     */
    public function __construct(public string $sha, public string $url)
    {
    }
}
