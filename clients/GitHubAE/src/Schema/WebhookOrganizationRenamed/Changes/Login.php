<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookOrganizationRenamed\Changes;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Login
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null"}';
    public function __construct(public ?string $from)
    {
    }
}
