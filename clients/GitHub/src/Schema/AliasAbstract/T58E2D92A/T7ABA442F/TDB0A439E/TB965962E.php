<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T58E2D92A\T7ABA442F\TDB0A439E;

abstract readonly class TB965962E implements \ApiClients\Client\GitHub\Contract\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok
{
    const SCHEMA_JSON = '{
    "required": [
        "total_count",
        "secrets"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "secrets": {
            "type": "array",
            "items": {
                "title": "Actions Secret",
                "required": [
                    "name",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the secret.",
                        "examples": [
                            "SECRET_TOKEN"
                        ]
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    }
                },
                "description": "Set secrets for GitHub Actions."
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "secrets": [
        {
            "name": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "name": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, public array $secrets)
    {
    }
}
