<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T1E9DA6AE\T37F593E0\T3EF4891C;

abstract readonly class T79A252FC implements \ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base
{
    const SCHEMA_JSON = '{
    "required": [
        "ref",
        "sha",
        "repo"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "type": "string"
        },
        "repo": {
            "title": "Repo Ref",
            "required": [
                "id",
                "url",
                "name"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "sha": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "repo": {
        "id": 2,
        "name": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "sha": "generated"
}';
    public function __construct(public string $ref, public \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo $repo, public string $sha)
    {
    }
}
