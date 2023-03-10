<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\DependabotAlertWithRepository;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Dependency
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"manifest_path":{"type":"string","description":"The full path to the dependency manifest file, relative to the root of the repository.","readOnly":true},"scope":{"enum":["development","runtime",null],"type":["string","null"],"description":"The execution scope of the vulnerable dependency.","readOnly":true}},"description":"Details for the vulnerable dependency.","readOnly":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable dependency.';
    public const SCHEMA_EXAMPLE_DATA = '{"package":{"ecosystem":"generated_ecosystem","name":"generated_name"},"manifest_path":"generated_manifest_path","scope":"generated_scope"}';
    /**
     * package: Details for the vulnerable package.
     * manifest_path: The full path to the dependency manifest file, relative to the root of the repository.
     * scope: The execution scope of the vulnerable dependency.
     */
    public function __construct(public ?Schema\DependabotAlertPackage $package, public ?string $manifest_path, public ?string $scope)
    {
    }
}
