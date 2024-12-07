<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TE3FC0C7D\T691EC246\T4B22CFB1;

use ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Commit\Author;
use ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Commit\Author\Committer;

abstract readonly class T8F3A7CC7 implements Committer, Author
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "Committer",
            "required": [
                "email",
                "name"
            ],
            "type": "object",
            "properties": {
                "date": {
                    "type": "string",
                    "format": "date-time"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "email"
                },
                "name": {
                    "type": "string",
                    "description": "The git author\'s name."
                },
                "username": {
                    "type": "string"
                }
            },
            "description": "Metaproperties for Git author\\/committer information."
        },
        {
            "required": [
                "date"
            ],
            "type": "object",
            "properties": {
                "date": {
                    "type": "string"
                },
                "email": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "email": "generated",
    "name": "generated",
    "username": "generated"
}';

    public function __construct(public string $date, public string|null $email, public string|null $name, public string|null $username)
    {
    }
}
