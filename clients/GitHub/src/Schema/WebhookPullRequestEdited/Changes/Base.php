<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes;

final readonly class Base implements \ApiClients\Client\GitHub\Contract\WebhookPullRequestEdited\Changes\Base
{
    const SCHEMA_JSON = '{
    "required": [
        "ref",
        "sha"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "sha": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "ref": {
        "from": "generated"
    },
    "sha": {
        "from": "generated"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base\Ref $ref, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base\Sha $sha)
    {
    }
}
