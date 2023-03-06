<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Manifest;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class File
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"source_location":"\\/src\\/build\\/package-lock.json"}';
    /**
     * source_location: The path of the manifest file relative to the root of the Git repository.
     */
    public function __construct(public ?string $source_location)
    {
    }
}
