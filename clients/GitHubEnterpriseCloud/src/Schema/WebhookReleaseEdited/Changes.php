<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookReleaseEdited;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
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
        "tag_name": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the tag_name if the action was `edited`."
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    },
    "name": {
        "from": "generated"
    },
    "tag_name": {
        "from": "generated"
    },
    "make_latest": {
        "to": false
    }
}';

    public function __construct(public Schema\WebhookReleaseEdited\Changes\Body|null $body, public Schema\WebhookReleaseEdited\Changes\Name|null $name, #[MapFrom('tag_name')]
    public Schema\WebhookReleaseEdited\Changes\TagName|null $tagName, #[MapFrom('make_latest')]
    public Schema\WebhookReleaseEdited\Changes\MakeLatest|null $makeLatest,)
    {
    }
}
