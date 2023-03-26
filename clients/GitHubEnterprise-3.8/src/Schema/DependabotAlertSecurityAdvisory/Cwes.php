<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A CWE weakness assigned to the advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated_cwe_id_null","name":"generated_name_null"}';
    /**
     * cweId: The unique CWE ID.
     * name: The short, plain text name of the CWE.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
