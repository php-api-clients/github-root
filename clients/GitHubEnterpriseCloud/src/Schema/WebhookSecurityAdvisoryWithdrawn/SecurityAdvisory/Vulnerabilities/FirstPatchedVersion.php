<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookSecurityAdvisoryWithdrawn\SecurityAdvisory\Vulnerabilities;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class FirstPatchedVersion
{
    public const SCHEMA_JSON = '{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated_identifier_null"}';
    public function __construct(public string $identifier)
    {
    }
}
