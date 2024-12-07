<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

final readonly class Content implements \ApiClients\Client\GitHub\Contract\FileCommit\Content
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "name": {
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        },
        "size": {
            "type": "integer"
        },
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "git_url": {
            "type": "string"
        },
        "download_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "_links": {
            "type": "object",
            "properties": {
                "self": {
                    "type": "string"
                },
                "git": {
                    "type": "string"
                },
                "html": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "path": "generated",
    "sha": "generated",
    "size": 4,
    "url": "generated",
    "html_url": "generated",
    "git_url": "generated",
    "download_url": "generated",
    "type": "generated",
    "_links": {
        "self": "generated",
        "git": "generated",
        "html": "generated"
    }
}';
    public function __construct(public ?string $name, public ?string $path, public ?string $sha, public ?int $size, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, public ?string $type, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public ?\ApiClients\Client\GitHub\Schema\FileCommit\Content\Links $links)
    {
    }
}
