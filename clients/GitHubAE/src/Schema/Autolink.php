<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Autolink
{
    public const SCHEMA_JSON = '{"title":"Autolink reference","required":["id","key_prefix","url_template"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"key_prefix":{"type":"string","description":"The prefix of a key that is linkified.","examples":["TICKET-"]},"url_template":{"type":"string","description":"A template for the target URL that is generated if a key was found.","examples":["https:\\/\\/example.com\\/TICKET?query=<num>"]}},"description":"An autolink reference."}';
    public const SCHEMA_TITLE = 'Autolink reference';
    public const SCHEMA_DESCRIPTION = 'An autolink reference.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3,"key_prefix":"TICKET-","url_template":"https:\\/\\/example.com\\/TICKET?query=<num>"}';
    public ?int $id;
    /**
     * The prefix of a key that is linkified.
     */
    public ?string $key_prefix;
    /**
     * A template for the target URL that is generated if a key was found.
     */
    public ?string $url_template;
    public function __construct(int $id, string $key_prefix, string $url_template)
    {
        $this->id = $id;
        $this->key_prefix = $key_prefix;
        $this->url_template = $url_template;
    }
}
