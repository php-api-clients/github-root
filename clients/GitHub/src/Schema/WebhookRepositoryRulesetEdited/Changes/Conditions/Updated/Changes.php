<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "condition_type": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "target": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "include": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "exclude": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "condition_type": {
        "from": "generated"
    },
    "target": {
        "from": "generated"
    },
    "include": {
        "from": [
            "generated",
            "generated"
        ]
    },
    "exclude": {
        "from": [
            "generated",
            "generated"
        ]
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('condition_type')] public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\ConditionType $conditionType, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Target $target, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Include_ $include, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Exclude $exclude)
    {
    }
}
