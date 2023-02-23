<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\TimelineReviewedEvent;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}}';
    public ?Schema\TimelineReviewedEvent\Links\Html $html;
    public ?Schema\TimelineReviewedEvent\Links\Html $pull_request;
    public function __construct(Schema\TimelineReviewedEvent\Links\Html $html, Schema\TimelineReviewedEvent\Links\Html $pull_request)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
