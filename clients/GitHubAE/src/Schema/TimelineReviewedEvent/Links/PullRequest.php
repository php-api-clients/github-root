<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\TimelineReviewedEvent\Links;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href_null"}';
    public function __construct(public string $href)
    {
    }
}
