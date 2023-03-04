<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Event\Payload;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"page_name":"generated_page_name","title":"generated_title","summary":"generated_summary","action":"generated_action","sha":"generated_sha","html_url":"generated_html_url"}';
    public ?string $page_name;
    public ?string $title;
    public ?string $summary;
    public ?string $action;
    public ?string $sha;
    public ?string $html_url;
    public function __construct(string $page_name, string $title, string $summary, string $action, string $sha, string $html_url)
    {
        $this->page_name = $page_name;
        $this->title = $title;
        $this->summary = $summary;
        $this->action = $action;
        $this->sha = $sha;
        $this->html_url = $html_url;
    }
}
