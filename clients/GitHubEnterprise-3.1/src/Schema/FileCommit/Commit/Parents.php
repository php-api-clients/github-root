<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\FileCommit\Commit;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Parents
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","html_url":"generated_html_url","sha":"generated_sha"}';
    public function __construct(public ?string $url, public ?string $html_url, public ?string $sha)
    {
    }
}
