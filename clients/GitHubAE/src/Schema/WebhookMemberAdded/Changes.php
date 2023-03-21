<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookMemberAdded;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":{"to":"write"}}';
    public function __construct(public ?Schema\WebhookMemberAdded\Changes\Permission $permission)
    {
    }
}
