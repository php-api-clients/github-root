<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\EnableOrDisableMaintenanceMode\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ApplicationxWwwFormUrlencoded
{
    public const SCHEMA_JSON = '{"required":["maintenance"],"type":"object","properties":{"maintenance":{"type":"string","description":"A JSON string with the attributes `enabled` and `when`.\\n\\nThe possible values for `enabled` are `true` and `false`. When it\'s `false`, the attribute `when` is ignored and the maintenance mode is turned off. `when` defines the time period when the maintenance was enabled.\\n\\nThe possible values for `when` are `now` or any date parseable by [mojombo\\/chronic](https:\\/\\/github.com\\/mojombo\\/chronic)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"maintenance":"generated_maintenance_null"}';
    /**
    * maintenance: A JSON string with the attributes `enabled` and `when`.
    
    The possible values for `enabled` are `true` and `false`. When it's `false`, the attribute `when` is ignored and the maintenance mode is turned off. `when` defines the time period when the maintenance was enabled.
    
    The possible values for `when` are `now` or any date parseable by [mojombo/chronic](https://github.com/mojombo/chronic).
    */
    public function __construct(public string $maintenance)
    {
    }
}
