<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Configuration;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Pattern;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\RuleType;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(public Configuration|null $configuration, #[MapFrom('rule_type')]
    public RuleType|null $ruleType, public Pattern|null $pattern,)
    {
    }
}
