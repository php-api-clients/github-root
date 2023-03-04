<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Package
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"generated_ecosystem","name":"generated_name"}';
    public ?string $ecosystem;
    public ?string $name;
    public function __construct(string $ecosystem, string $name)
    {
        $this->ecosystem = $ecosystem;
        $this->name = $name;
    }
}
