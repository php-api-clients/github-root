<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ContentTree;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Entries
{
    public const SCHEMA_JSON         = '{
    "required": [
        "_links",
        "git_url",
        "html_url",
        "download_url",
        "name",
        "path",
        "sha",
        "size",
        "type",
        "url"
    ],
    "type": "object",
    "properties": {
        "type": {
            "type": "string"
        },
        "size": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "git_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "html_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "download_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "_links": {
            "required": [
                "git",
                "html",
                "self"
            ],
            "type": "object",
            "properties": {
                "git": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "html": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "self": {
                    "type": "string",
                    "format": "uri"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "size": 4,
    "name": "generated",
    "path": "generated",
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/",
    "git_url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "download_url": "https:\\/\\/example.com\\/",
    "_links": {
        "git": "https:\\/\\/example.com\\/",
        "html": "https:\\/\\/example.com\\/",
        "self": "https:\\/\\/example.com\\/"
    }
}';

    public function __construct(public string $type, public int $size, public string $name, public string $path, public string $sha, public string $url, #[MapFrom('git_url')]
    public string|null $gitUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, #[MapFrom('download_url')]
    public string|null $downloadUrl, #[MapFrom('_links')]
    public Schema\ContentTree\Entries\Links $links,)
    {
    }
}
