<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningVariantAnalysisRepository implements \ApiClients\Client\GitHub\Contract\CodeScanningVariantAnalysisRepository
{
    public const SCHEMA_JSON         = '{
    "title": "Repository Identifier",
    "required": [
        "full_name",
        "id",
        "name",
        "private",
        "stargazers_count",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "A unique identifier of the repository.",
            "examples": [
                1296269
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the repository.",
            "examples": [
                "Hello-World"
            ]
        },
        "full_name": {
            "type": "string",
            "description": "The full, globally unique, name of the repository.",
            "examples": [
                "octocat\\/Hello-World"
            ]
        },
        "private": {
            "type": "boolean",
            "description": "Whether the repository is private."
        },
        "stargazers_count": {
            "type": "integer",
            "examples": [
                80
            ]
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2011-01-26T19:14:43Z"
            ]
        }
    },
    "description": "Repository Identifier"
}';
    public const SCHEMA_TITLE        = 'Repository Identifier';
    public const SCHEMA_DESCRIPTION  = 'Repository Identifier';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "full_name": "generated",
    "private": false,
    "stargazers_count": 16,
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * id: A unique identifier of the repository.
     * name: The name of the repository.
     * fullName: The full, globally unique, name of the repository.
     * private: Whether the repository is private.
     */
    public function __construct(public int $id, public string $name, #[MapFrom('full_name')]
    public string $fullName, public bool $private, #[MapFrom('stargazers_count')]
    public int $stargazersCount, #[MapFrom('updated_at')]
    public string|null $updatedAt,)
    {
    }
}
