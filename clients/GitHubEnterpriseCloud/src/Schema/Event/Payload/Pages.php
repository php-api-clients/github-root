<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Event\Payload;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"page_name":"generated_page_name","title":"generated_title","summary":"generated_summary","action":"generated_action","sha":"generated_sha","html_url":"generated_html_url"}';
    public function __construct(public ?string $page_name, public ?string $title, public ?string $summary, public ?string $action, public ?string $sha, public ?string $html_url)
    {
    }
}
