<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":{"from":"generated_from"},"slug":{"from":"generated_from"}}';
    public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $login;
    public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $slug;
    public function __construct(Schema\WebhookDiscussionCommentEdited\Changes\Body $login, Schema\WebhookDiscussionCommentEdited\Changes\Body $slug)
    {
        $this->login = $login;
        $this->slug = $slug;
    }
}
