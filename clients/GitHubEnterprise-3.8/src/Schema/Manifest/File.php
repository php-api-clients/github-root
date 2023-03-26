<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Manifest;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class File
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"source_location":"\\/src\\/build\\/package-lock.json"}';
    /**
     * sourceLocation: The path of the manifest file relative to the root of the Git repository.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('source_location')] public ?string $sourceLocation)
    {
    }
}
