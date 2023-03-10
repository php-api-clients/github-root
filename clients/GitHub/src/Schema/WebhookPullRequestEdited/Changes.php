<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":{"from":"generated_from"},"sha":{"from":"generated_from"}},"body":{"from":"generated_from"},"title":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookPullRequestEdited\Changes\Base $base, public ?Schema\WebhookProjectEdited\Changes\Body $body, public ?Schema\WebhookMilestoneEdited\Changes\Title $title)
    {
    }
}
