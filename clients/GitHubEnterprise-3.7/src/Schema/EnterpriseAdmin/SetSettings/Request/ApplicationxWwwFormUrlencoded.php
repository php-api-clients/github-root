<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\SetSettings\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ApplicationxWwwFormUrlencoded
{
    public const SCHEMA_JSON = '{"required":["settings"],"type":"object","properties":{"settings":{"type":"string","description":"A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/rest\\/reference\\/enterprise-admin#get-settings)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"settings":"generated_settings_null"}';
    /**
     * settings: A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.7/rest/reference/enterprise-admin#get-settings).
     */
    public function __construct(public string $settings)
    {
    }
}
