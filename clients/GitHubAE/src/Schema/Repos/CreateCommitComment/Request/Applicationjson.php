<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\CreateCommitComment\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."},"path":{"type":"string","description":"Relative path of the file to comment on."},"position":{"type":"integer","description":"Line index in the diff to comment on."},"line":{"type":"integer","description":"**Deprecated**. Use **position** parameter instead. Line number in the file to comment on."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body","path":"generated_path","position":13,"line":13}';
    /**
     * The contents of the comment.
     */
    public ?string $body;
    /**
     * Relative path of the file to comment on.
     */
    public string $path;
    /**
     * Line index in the diff to comment on.
     */
    public int $position;
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     */
    public int $line;
    public function __construct(string $body, string $path, int $position, int $line)
    {
        $this->body = $body;
        $this->path = $path;
        $this->position = $position;
        $this->line = $line;
    }
}
