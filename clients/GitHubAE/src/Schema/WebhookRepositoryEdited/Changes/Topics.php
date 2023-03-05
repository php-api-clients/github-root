<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRepositoryEdited\Changes;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":[null]}';
    /**
     * @var array<string>
     */
    public ?array $from;
    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
