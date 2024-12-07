<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookLabelEdited;

use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Color;
use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Name;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookLabelEdited\Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "color": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the color if the action was `edited`."
                }
            }
        },
        "description": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the description if the action was `edited`."
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
        }
    },
    "description": "The changes to the label if the action was `edited`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the label if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "color": {
        "from": "generated"
    },
    "description": {
        "from": "generated"
    },
    "name": {
        "from": "generated"
    }
}';

    public function __construct(public Color|null $color, public Description|null $description, public Name|null $name)
    {
    }
}
