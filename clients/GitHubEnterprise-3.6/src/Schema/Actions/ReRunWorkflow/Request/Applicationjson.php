<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\ReRunWorkflow\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enable_debug_logging":false}';
    /**
     * enableDebugLogging: Whether to enable debug logging for the re-run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enable_debug_logging')] public ?bool $enableDebugLogging)
    {
    }
}
