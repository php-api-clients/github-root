<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCodeScanningAlertCreated\Alert;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Tool
{
    public const SCHEMA_JSON = '{"required":["name","version"],"type":["object","null"],"properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"guid":"generated_guid","name":"generated_name","version":"generated_version"}';
    /**
     * name: The name of the tool used to generate the code scanning analysis alert.
     * version: The version of the tool used to detect the alert.
     */
    public function __construct(public ?string $guid, public string $name, public ?string $version)
    {
    }
}
