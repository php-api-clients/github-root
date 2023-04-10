<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookMemberAdded\Changes;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Permission
{
    public const SCHEMA_JSON = '{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"to":"write"}';
    public function __construct(public string $to)
    {
    }
}
