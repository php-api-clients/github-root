<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'An advisory identifier.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","value":"generated_value"}';
    /**
     * The type of advisory identifier.
     */
    public ?string $type;
    /**
     * The value of the advisory identifer.
     */
    public ?string $value;
    public function __construct(string $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
}
