<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\SetSettings\Request;

final readonly class ApplicationXWwwFormUrlencoded
{
    public const SCHEMA_JSON         = '{
    "required": [
        "settings"
    ],
    "type": "object",
    "properties": {
        "settings": {
            "type": "string",
            "description": "A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.11\\/rest\\/enterprise-admin\\/management-console#get-settings)."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "settings": "generated"
}';

    /**
     * settings: A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.11/rest/enterprise-admin/management-console#get-settings).
     */
    public function __construct(public string $settings)
    {
    }
}
