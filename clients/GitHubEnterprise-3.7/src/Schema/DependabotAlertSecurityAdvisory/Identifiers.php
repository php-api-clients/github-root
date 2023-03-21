<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'An advisory identifier.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"CVE","value":"generated_value_null"}';
    /**
     * type: The type of advisory identifier.
     * value: The value of the advisory identifer.
     */
    public function __construct(public string $type, public string $value)
    {
    }
}
