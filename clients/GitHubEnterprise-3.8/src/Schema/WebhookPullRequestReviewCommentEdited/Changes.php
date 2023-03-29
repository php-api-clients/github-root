<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPullRequestReviewCommentEdited;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookPullRequestReviewCommentEdited\Changes\Body $body)
    {
    }
}
