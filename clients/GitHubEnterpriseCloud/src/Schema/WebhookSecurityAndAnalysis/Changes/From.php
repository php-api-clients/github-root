<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookSecurityAndAnalysis\Changes;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"security_and_analysis":{"advanced_security":{"status":"generated_status"},"secret_scanning":{"status":"generated_status"},"secret_scanning_push_protection":{"status":"generated_status"}}}';
    public ?Schema\SecurityAndAnalysis $security_and_analysis;
    public function __construct(Schema\SecurityAndAnalysis $security_and_analysis)
    {
        $this->security_and_analysis = $security_and_analysis;
    }
}
