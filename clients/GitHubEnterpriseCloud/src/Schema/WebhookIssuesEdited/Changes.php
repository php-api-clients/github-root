<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookIssuesEdited;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
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
