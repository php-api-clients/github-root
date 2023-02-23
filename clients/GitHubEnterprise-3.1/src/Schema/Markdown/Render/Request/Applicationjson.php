<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Markdown\Render\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode. Can be either `markdown` or `gfm`.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text","mode":"markdown","context":"generated_context"}';
    /**
     * The Markdown text to render in HTML.
     */
    public ?string $text;
    /**
     * The rendering mode. Can be either `markdown` or `gfm`.
     */
    public string $mode;
    /**
     * The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    public string $context;
    public function __construct(string $text, string $mode, string $context)
    {
        $this->text = $text;
        $this->mode = $mode;
        $this->context = $context;
    }
}
