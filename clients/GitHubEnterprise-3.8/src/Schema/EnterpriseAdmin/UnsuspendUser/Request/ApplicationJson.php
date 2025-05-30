<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UnsuspendUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "reason": {
            "type": "string",
            "description": "The reason the user is being unsuspended. This message will be logged in the [audit log](https:\\/\\/docs.github.com\\/enterprise-server@3.8\\/admin\\/monitoring-activity-in-your-enterprise\\/reviewing-audit-logs-for-your-enterprise\\/about-the-audit-log-for-your-enterprise). If you don\'t provide a `reason`, it will default to \\"Unsuspended via API by _SITE\\\\_ADMINISTRATOR_\\", where _SITE\\\\_ADMINISTRATOR_ is the person who performed the action."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "reason": "generated"
}';

    /**
     * reason: The reason the user is being unsuspended. This message will be logged in the [audit log](https://docs.github.com/enterprise-server@3.8/admin/monitoring-activity-in-your-enterprise/reviewing-audit-logs-for-your-enterprise/about-the-audit-log-for-your-enterprise). If you don't provide a `reason`, it will default to "Unsuspended via API by _SITE\_ADMINISTRATOR_", where _SITE\_ADMINISTRATOR_ is the person who performed the action.
     */
    public function __construct(public string|null $reason)
    {
    }
}
