<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Autolink
{
    public const SCHEMA_JSON = '{"title":"Autolink reference","required":["id","key_prefix","url_template"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"key_prefix":{"type":"string","description":"The prefix of a key that is linkified.","examples":["TICKET-"]},"url_template":{"type":"string","description":"A template for the target URL that is generated if a key was found.","examples":["https:\\/\\/example.com\\/TICKET?query=<num>"]}},"description":"An autolink reference."}';
    public const SCHEMA_TITLE = 'Autolink reference';
    public const SCHEMA_DESCRIPTION = 'An autolink reference.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3,"key_prefix":"TICKET-","url_template":"https:\\/\\/example.com\\/TICKET?query=<num>"}';
    /**
     * key_prefix: The prefix of a key that is linkified.
     * url_template: A template for the target URL that is generated if a key was found.
     */
    public function __construct(public int $id, public string $key_prefix, public string $url_template)
    {
    }
}
