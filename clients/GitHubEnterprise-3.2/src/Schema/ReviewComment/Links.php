<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ReviewComment;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":{"href":"generated_href"},"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}}';
    /**
     * self: Hypermedia Link
     * html: Hypermedia Link
     * pull_request: Hypermedia Link
     */
    public function __construct(public Schema\Link $self, public Schema\Link $html, public Schema\Link $pull_request)
    {
    }
}
