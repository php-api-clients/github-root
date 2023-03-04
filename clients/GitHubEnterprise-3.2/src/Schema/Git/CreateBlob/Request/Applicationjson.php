<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Git\CreateBlob\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content","encoding":"generated_encoding"}';
    /**
     * The new blob's content.
     */
    public ?string $content;
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public string $encoding;
    public function __construct(string $content, string $encoding)
    {
        $this->content = $content;
        $this->encoding = $encoding;
    }
}
