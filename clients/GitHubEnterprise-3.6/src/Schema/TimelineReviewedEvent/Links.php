<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\TimelineReviewedEvent;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_null"},"pull_request":{"href":"generated_href_null"}}';
    public function __construct(public Schema\TimelineReviewedEvent\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\TimelineReviewedEvent\Links\PullRequest $pullRequest)
    {
    }
}
