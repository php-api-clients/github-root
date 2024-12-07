<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "configuration": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "rule_type": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "pattern": {
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
    "configuration": {
        "from": "generated"
    },
    "rule_type": {
        "from": "generated"
    },
    "pattern": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Configuration $configuration, #[\EventSauce\ObjectHydrator\MapFrom('rule_type')] public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\RuleType $ruleType, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Pattern $pattern)
    {
    }
}
