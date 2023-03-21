<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateTagProtection\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["pattern"],"type":"object","properties":{"pattern":{"type":"string","description":"An optional glob pattern to match against when enforcing tag protection."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pattern":"generated_pattern_null"}';
    /**
     * pattern: An optional glob pattern to match against when enforcing tag protection.
     */
    public function __construct(public string $pattern)
    {
    }
}
