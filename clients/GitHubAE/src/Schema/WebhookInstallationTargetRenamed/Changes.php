<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":{"from":"generated_from_null"},"slug":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookInstallationTargetRenamed\Changes\Login $login, public ?Schema\WebhookInstallationTargetRenamed\Changes\Slug $slug)
    {
    }
}
