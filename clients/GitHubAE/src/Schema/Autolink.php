<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
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
    /**
     * keyPrefix: The prefix of a key that is linkified.
     * urlTemplate: A template for the target URL that is generated if a key was found.
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('key_prefix')] public string $keyPrefix, #[\EventSauce\ObjectHydrator\MapFrom('url_template')] public string $urlTemplate)
    {
    }
}
