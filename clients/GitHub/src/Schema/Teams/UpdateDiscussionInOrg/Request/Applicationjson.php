<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Teams\UpdateDiscussionInOrg\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","body":"generated_body"}';
    /**
     * The discussion post's title.
     */
    public ?string $title;
    /**
     * The discussion post's body text.
     */
    public ?string $body;
    public function __construct(string $title, string $body)
    {
        $this->title = $title;
        $this->body = $body;
    }
}
