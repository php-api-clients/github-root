<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ReviewComment;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":{"href":"generated_href_null"},"html":{"href":"generated_href_null"},"pull_request":{"href":"generated_href_null"}}';
    /**
     * self: Hypermedia Link
     * html: Hypermedia Link
     * pullRequest: Hypermedia Link
     */
    public function __construct(public Schema\Link $self, public Schema\Link $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\Link $pullRequest)
    {
    }
}
