<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Issues\UpdateComment\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body"}';
    /**
     * The contents of the comment.
     */
    public ?string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
