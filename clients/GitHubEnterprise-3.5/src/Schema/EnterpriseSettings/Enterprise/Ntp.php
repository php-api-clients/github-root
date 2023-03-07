<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Ntp
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"primary_server":"generated_primary_server","secondary_server":"generated_secondary_server"}';
    public function __construct(public ?string $primary_server, public ?string $secondary_server)
    {
    }
}
