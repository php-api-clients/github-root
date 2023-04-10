<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\SuspendUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"reason":{"type":"string","description":"The reason the user is being suspended. This message will be logged in the [audit log](https:\\/\\/docs.github.com\\/enterprise-server@3.2\\/admin\\/monitoring-activity-in-your-enterprise\\/reviewing-audit-logs-for-your-enterprise\\/about-the-audit-log-for-your-enterprise). If you don\'t provide a `reason`, it will default to \\"Suspended via API by _SITE\\\\_ADMINISTRATOR_\\", where _SITE\\\\_ADMINISTRATOR_ is the person who performed the action."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason_null"}';
    /**
     * reason: The reason the user is being suspended. This message will be logged in the [audit log](https://docs.github.com/enterprise-server@3.2/admin/monitoring-activity-in-your-enterprise/reviewing-audit-logs-for-your-enterprise/about-the-audit-log-for-your-enterprise). If you don't provide a `reason`, it will default to "Suspended via API by _SITE\_ADMINISTRATOR_", where _SITE\_ADMINISTRATOR_ is the person who performed the action.
     */
    public function __construct(public ?string $reason)
    {
    }
}
