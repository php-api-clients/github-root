<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnforceAdmins
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","enabled":false}';
    public ?string $url;
    public ?bool $enabled;
    public function __construct(string $url, bool $enabled)
    {
        $this->url = $url;
        $this->enabled = $enabled;
    }
}
