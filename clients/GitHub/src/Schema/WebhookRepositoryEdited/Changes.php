<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"default_branch":{"from":"generated_from"},"description":{"from":"generated_from"},"homepage":{"from":"generated_from"},"topics":{"from":null}}';
    public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $default_branch;
    public ?Schema\WebhookProjectCardEdited\Changes\Note $description;
    public ?Schema\WebhookProjectCardEdited\Changes\Note $homepage;
    public ?Schema\WebhookRepositoryEdited\Changes\Topics $topics;
    public function __construct(Schema\WebhookDiscussionCommentEdited\Changes\Body $default_branch, Schema\WebhookProjectCardEdited\Changes\Note $description, Schema\WebhookProjectCardEdited\Changes\Note $homepage, Schema\WebhookRepositoryEdited\Changes\Topics $topics)
    {
        $this->default_branch = $default_branch;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->topics = $topics;
    }
}
