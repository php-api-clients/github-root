<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRepositoryEdited\Changes;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":null}';
    public ?array $from;
    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
