<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit\Commit;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Parents
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","html_url":"generated_html_url","sha":"generated_sha"}';
    public ?string $url;
    public ?string $html_url;
    public ?string $sha;
    public function __construct(string $url, string $html_url, string $sha)
    {
        $this->url = $url;
        $this->html_url = $html_url;
        $this->sha = $sha;
    }
}
