<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Markdown\Render\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text_null","mode":"markdown","context":"generated_context_null"}';
    /**
     * text: The Markdown text to render in HTML.
     * mode: The rendering mode.
     * context: The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    public function __construct(public string $text, public ?string $mode, public ?string $context)
    {
    }
}
