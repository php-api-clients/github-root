<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryWithdrawn;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SecurityAdvisory
{
    public const SCHEMA_JSON = '{"required":["cvss","cwes","ghsa_id","summary","description","severity","identifiers","references","published_at","updated_at","withdrawn_at","vulnerabilities"],"type":"object","properties":{"cvss":{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}},"description":{"type":"string"},"ghsa_id":{"type":"string"},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}},"published_at":{"type":"string"},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}},"severity":{"type":"string"},"summary":{"type":"string"},"updated_at":{"type":"string"},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}},"withdrawn_at":{"type":"string"}},"description":"The details of the security advisory, including summary, description, and severity."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The details of the security advisory, including summary, description, and severity.';
    public const SCHEMA_EXAMPLE_DATA = '{"cvss":{"score":13,"vector_string":"generated_vector_string"},"cwes":[{"cwe_id":"generated_cwe_id","name":"generated_name"}],"description":"generated_description","ghsa_id":"generated_ghsa_id","identifiers":[{"type":"generated_type","value":"generated_value"}],"published_at":"generated_published_at","references":[{"url":"generated_url"}],"severity":"generated_severity","summary":"generated_summary","updated_at":"generated_updated_at","vulnerabilities":[{"first_patched_version":{"identifier":"generated_identifier"},"package":{"ecosystem":"generated_ecosystem","name":"generated_name"},"severity":"generated_severity","vulnerable_version_range":"generated_vulnerable_version_range"}],"withdrawn_at":"generated_withdrawn_at"}';
    public ?Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cvss $cvss;
    /**
     * @var array<Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cwes>
     */
    public ?array $cwes;
    public ?string $description;
    public ?string $ghsa_id;
    /**
     * @var array<Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Identifiers>
     */
    public ?array $identifiers;
    public ?string $published_at;
    /**
     * @var array<Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\References>
     */
    public ?array $references;
    public ?string $severity;
    public ?string $summary;
    public ?string $updated_at;
    /**
     * @var array<Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities>
     */
    public ?array $vulnerabilities;
    public ?string $withdrawn_at;
    public function __construct(Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cvss $cvss, array $cwes, string $description, string $ghsa_id, array $identifiers, string $published_at, array $references, string $severity, string $summary, string $updated_at, array $vulnerabilities, string $withdrawn_at)
    {
        $this->cvss = $cvss;
        $this->cwes = $cwes;
        $this->description = $description;
        $this->ghsa_id = $ghsa_id;
        $this->identifiers = $identifiers;
        $this->published_at = $published_at;
        $this->references = $references;
        $this->severity = $severity;
        $this->summary = $summary;
        $this->updated_at = $updated_at;
        $this->vulnerabilities = $vulnerabilities;
        $this->withdrawn_at = $withdrawn_at;
    }
}
