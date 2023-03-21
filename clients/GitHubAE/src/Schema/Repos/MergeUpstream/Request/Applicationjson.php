<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\MergeUpstream\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The name of the branch which should be updated to match upstream."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch_null"}';
    /**
     * branch: The name of the branch which should be updated to match upstream.
     */
    public function __construct(public string $branch)
    {
    }
}
