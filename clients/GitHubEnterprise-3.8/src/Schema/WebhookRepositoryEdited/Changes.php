<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRepositoryEdited;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"default_branch":{"from":"generated_from"},"description":{"from":"generated_from"},"homepage":{"from":"generated_from"},"topics":{"from":["generated_from"]}}';
    public function __construct(public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $default_branch, public ?Schema\WebhookProjectCardEdited\Changes\Note $description, public ?Schema\WebhookProjectCardEdited\Changes\Note $homepage, public ?Schema\WebhookRepositoryEdited\Changes\Topics $topics)
    {
    }
}
