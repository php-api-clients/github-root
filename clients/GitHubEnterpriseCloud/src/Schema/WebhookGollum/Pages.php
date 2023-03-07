<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookGollum;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"required":["page_name","title","summary","action","sha","html_url"],"type":"object","properties":{"action":{"enum":["created","edited"],"type":"string","description":"The action that was performed on the page. Can be `created` or `edited`."},"html_url":{"type":"string","description":"Points to the HTML wiki page.","format":"uri"},"page_name":{"type":"string","description":"The name of the page."},"sha":{"type":"string","description":"The latest commit SHA of the page."},"summary":{"type":["string","null"]},"title":{"type":"string","description":"The current page title."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"generated_action","html_url":"generated_html_url","page_name":"generated_page_name","sha":"generated_sha","summary":"generated_summary","title":"generated_title"}';
    /**
     * action: The action that was performed on the page. Can be `created` or `edited`.
     * html_url: Points to the HTML wiki page.
     * page_name: The name of the page.
     * sha: The latest commit SHA of the page.
     * title: The current page title.
     */
    public function __construct(public ?string $action, public ?string $html_url, public ?string $page_name, public ?string $sha, public ?string $summary, public ?string $title)
    {
    }
}
