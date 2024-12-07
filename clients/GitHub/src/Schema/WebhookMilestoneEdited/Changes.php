<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited;

use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\DueOn;
use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Title;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookMilestoneEdited\Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
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
        "due_on": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the due date if the action was `edited`."
                }
            }
        },
        "title": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the title if the action was `edited`."
                }
            }
        }
    },
    "description": "The changes to the milestone if the action was `edited`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the milestone if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "description": {
        "from": "generated"
    },
    "due_on": {
        "from": "generated"
    },
    "title": {
        "from": "generated"
    }
}';

    public function __construct(public Description|null $description, #[MapFrom('due_on')]
    public DueOn|null $dueOn, public Title|null $title,)
    {
    }
}
