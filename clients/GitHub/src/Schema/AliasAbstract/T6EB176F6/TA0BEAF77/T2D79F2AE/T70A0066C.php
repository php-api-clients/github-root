<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6EB176F6\TA0BEAF77\T2D79F2AE;

use ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited\Changes\LinearHistoryRequirementEnforcementLevel;

abstract readonly class T70A0066C implements LinearHistoryRequirementEnforcementLevel
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "enum": [
                "off",
                "non_admins",
                "everyone"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "off"
}';

    public function __construct(public string $from)
    {
    }
}
