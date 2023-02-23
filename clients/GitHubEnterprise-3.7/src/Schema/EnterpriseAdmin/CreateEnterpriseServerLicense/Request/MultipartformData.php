<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateEnterpriseServerLicense\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class MultipartformData
{
    public const SCHEMA_JSON = '{"required":["license"],"type":"object","properties":{"license":{"type":"string","description":"The content of your _.ghl_ license file."},"password":{"type":"string","description":"You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don\'t need this parameter."},"settings":{"type":"string","description":"An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/rest\\/reference\\/enterprise-admin#get-settings)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"license":"generated_license","password":"generated_password","settings":"generated_settings"}';
    /**
     * The content of your _.ghl_ license file.
     */
    public ?string $license;
    /**
     * You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don't need this parameter.
     */
    public string $password;
    /**
     * An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.7/rest/reference/enterprise-admin#get-settings).
     */
    public string $settings;
    public function __construct(string $license, string $password, string $settings)
    {
        $this->license = $license;
        $this->password = $password;
        $this->settings = $settings;
    }
}
