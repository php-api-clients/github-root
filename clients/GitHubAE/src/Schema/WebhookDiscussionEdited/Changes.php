<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookDiscussionEdited;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"},"title":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookDiscussionEdited\Changes\Body $body, public ?Schema\WebhookDiscussionEdited\Changes\Title $title)
    {
    }
}
