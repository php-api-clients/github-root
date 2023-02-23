<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestEdited;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":{"from":"generated_from"},"sha":{"from":"generated_from"}},"body":{"from":"generated_from"},"title":{"from":"generated_from"}}';
    public ?Schema\WebhookPullRequestEdited\Changes\Base $base;
    public ?Schema\WebhookProjectEdited\Changes\Body $body;
    public ?Schema\WebhookMilestoneEdited\Changes\Title $title;
    public function __construct(Schema\WebhookPullRequestEdited\Changes\Base $base, Schema\WebhookProjectEdited\Changes\Body $body, Schema\WebhookMilestoneEdited\Changes\Title $title)
    {
        $this->base = $base;
        $this->body = $body;
        $this->title = $title;
    }
}
