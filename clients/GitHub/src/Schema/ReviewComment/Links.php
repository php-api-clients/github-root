<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ReviewComment;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":{"href":"generated_href"},"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}}';
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $self;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $html;
    /**
     * Hypermedia Link
     */
    public ?Schema\Link $pull_request;
    public function __construct(Schema\Link $self, Schema\Link $html, Schema\Link $pull_request)
    {
        $this->self = $self;
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
