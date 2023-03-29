<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookReleaseEdited;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"},"name":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookReleaseEdited\Changes\Body $body, public ?Schema\WebhookReleaseEdited\Changes\Name $name)
    {
    }
}
