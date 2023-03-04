<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class DependabotAlertPackage
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable package.';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"generated_ecosystem","name":"generated_name"}';
    /**
     * The package's language or package management ecosystem.
     */
    public ?string $ecosystem;
    /**
     * The unique package name within its ecosystem.
     */
    public ?string $name;
    public function __construct(string $ecosystem, string $name)
    {
        $this->ecosystem = $ecosystem;
        $this->name = $name;
    }
}
