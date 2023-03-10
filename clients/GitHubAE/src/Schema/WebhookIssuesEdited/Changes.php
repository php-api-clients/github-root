<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookIssuesEdited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from"},"title":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookIssueCommentEdited\Changes\Body $body, public ?Schema\WebhookIssuesEdited\Changes\Title $title)
    {
    }
}
