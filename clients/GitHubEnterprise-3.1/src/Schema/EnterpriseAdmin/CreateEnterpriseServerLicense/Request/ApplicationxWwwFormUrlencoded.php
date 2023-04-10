<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\CreateEnterpriseServerLicense\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ApplicationxWwwFormUrlencoded
{
    public const SCHEMA_JSON = '{"required":["license"],"type":"object","properties":{"license":{"type":"string","description":"The content of your _.ghl_ license file."},"password":{"type":"string","description":"You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don\'t need this parameter."},"settings":{"type":"string","description":"An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/enterprise-admin#get-settings)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"license":"generated_license_null","password":"generated_password_null","settings":"generated_settings_null"}';
    /**
     * license: The content of your _.ghl_ license file.
     * password: You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don't need this parameter.
     * settings: An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#get-settings).
     */
    public function __construct(public string $license, public ?string $password, public ?string $settings)
    {
    }
}
