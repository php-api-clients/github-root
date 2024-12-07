<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookMilestoneEdited\Changes
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    const SCHEMA_EXAMPLE_DATA = '{
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
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Description $description, #[\EventSauce\ObjectHydrator\MapFrom('due_on')] public ?\ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\DueOn $dueOn, public ?\ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Title $title)
    {
    }
}
