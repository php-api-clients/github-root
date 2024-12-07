<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookReleaseEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "body": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the body if the action was `edited`."
                }
            }
        },
        "name": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the name if the action was `edited`."
                }
            }
        },
        "make_latest": {
            "required": [
                "to"
            ],
            "type": "object",
            "properties": {
                "to": {
                    "type": "boolean",
                    "description": "Whether this release was explicitly `edited` to be the latest."
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    },
    "name": {
        "from": "generated"
    },
    "make_latest": {
        "to": false
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\Body $body, public ?\ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\Name $name, #[\EventSauce\ObjectHydrator\MapFrom('make_latest')] public ?\ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\MakeLatest $makeLatest)
    {
    }
}
