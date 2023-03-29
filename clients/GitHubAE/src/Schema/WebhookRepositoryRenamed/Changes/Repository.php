<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRepositoryRenamed\Changes;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Repository
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":{"from":"generated_from_null"}}';
    public function __construct(public Schema\WebhookRepositoryRenamed\Changes\Repository\Name $name)
    {
    }
}
