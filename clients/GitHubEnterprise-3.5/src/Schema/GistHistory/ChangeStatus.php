<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GistHistory;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ChangeStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total":13,"additions":13,"deletions":13}';
    public function __construct(public ?int $total, public ?int $additions, public ?int $deletions)
    {
    }
}
