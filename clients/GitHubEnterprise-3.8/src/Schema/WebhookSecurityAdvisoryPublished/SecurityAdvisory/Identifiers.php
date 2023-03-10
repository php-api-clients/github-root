<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","value":"generated_value"}';
    public function __construct(public string $type, public string $value)
    {
    }
}
