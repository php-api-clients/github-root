<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookGollum;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"required":["page_name","title","summary","action","sha","html_url"],"type":"object","properties":{"action":{"enum":["created","edited"],"type":"string","description":"The action that was performed on the page. Can be `created` or `edited`."},"html_url":{"type":"string","description":"Points to the HTML wiki page.","format":"uri"},"page_name":{"type":"string","description":"The name of the page."},"sha":{"type":"string","description":"The latest commit SHA of the page."},"summary":{"type":["string","null"]},"title":{"type":"string","description":"The current page title."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"generated_action","html_url":"generated_html_url","page_name":"generated_page_name","sha":"generated_sha","summary":"generated_summary","title":"generated_title"}';
    /**
     * The action that was performed on the page. Can be `created` or `edited`.
     */
    public ?string $action;
    /**
     * Points to the HTML wiki page.
     */
    public ?string $html_url;
    /**
     * The name of the page.
     */
    public ?string $page_name;
    /**
     * The latest commit SHA of the page.
     */
    public ?string $sha;
    public ?string $summary;
    /**
     * The current page title.
     */
    public ?string $title;
    public function __construct(string $action, string $html_url, string $page_name, string $sha, string $summary, string $title)
    {
        $this->action = $action;
        $this->html_url = $html_url;
        $this->page_name = $page_name;
        $this->sha = $sha;
        $this->summary = $summary;
        $this->title = $title;
    }
}
