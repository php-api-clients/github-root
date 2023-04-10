<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Git\CreateBlob\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content_null","encoding":"generated_encoding_null"}';
    /**
     * content: The new blob's content.
     * encoding: The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public function __construct(public string $content, public ?string $encoding)
    {
    }
}
