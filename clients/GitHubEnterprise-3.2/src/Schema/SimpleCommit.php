<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class SimpleCommit
{
    public const SCHEMA_JSON = '{"title":"Simple Commit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"id":{"type":"string"},"tree_id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string","format":"date-time"},"author":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}},"description":"Simple Commit"}';
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'Simple Commit';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","tree_id":"generated_tree_id","message":"generated_message","timestamp":"generated_timestamp","author":{"name":"generated_name","email":"generated_email"},"committer":{"name":"generated_name","email":"generated_email"}}';
    public function __construct(public ?string $id, public ?string $tree_id, public ?string $message, public ?string $timestamp, public ?Schema\SimpleCommit\Author $author, public ?Schema\SimpleCommit\Author $committer)
    {
    }
}
