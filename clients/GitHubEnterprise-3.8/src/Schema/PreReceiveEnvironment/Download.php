<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Download
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","state":"generated_state","downloaded_at":"generated_downloaded_at","message":"generated_message"}';
    public ?string $url;
    public ?string $state;
    public ?string $downloaded_at;
    public ?string $message;
    public function __construct(string $url, string $state, string $downloaded_at, string $message)
    {
        $this->url = $url;
        $this->state = $state;
        $this->downloaded_at = $downloaded_at;
        $this->message = $message;
    }
}
