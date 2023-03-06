<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","state":"generated_state","downloaded_at":"generated_downloaded_at","message":"generated_message"}';
    public function __construct(public ?string $url, public ?string $state, public ?string $downloaded_at, public ?string $message)
    {
    }
}
