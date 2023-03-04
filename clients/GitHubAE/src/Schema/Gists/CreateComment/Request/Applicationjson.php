<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Gists\CreateComment\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"Body of the attachment"}';
    /**
     * The comment text.
     */
    public ?string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
