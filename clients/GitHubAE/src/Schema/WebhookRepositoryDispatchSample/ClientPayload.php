<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRepositoryDispatchSample;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ClientPayload
{
    public const SCHEMA_JSON = '{"type":["object","null"],"additionalProperties":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
