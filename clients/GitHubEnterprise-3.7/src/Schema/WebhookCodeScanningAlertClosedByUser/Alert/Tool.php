<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCodeScanningAlertClosedByUser\Alert;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Tool
{
    public const SCHEMA_JSON = '{"required":["name","version"],"type":"object","properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"guid":"generated_guid","name":"generated_name","version":"generated_version"}';
    public ?string $guid;
    /**
     * The name of the tool used to generate the code scanning analysis alert.
     */
    public ?string $name;
    /**
     * The version of the tool used to detect the alert.
     */
    public ?string $version;
    public function __construct(string $guid, string $name, string $version)
    {
        $this->guid = $guid;
        $this->name = $name;
        $this->version = $version;
    }
}
