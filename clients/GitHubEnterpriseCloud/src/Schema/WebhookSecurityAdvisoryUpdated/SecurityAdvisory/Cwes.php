<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookSecurityAdvisoryUpdated\SecurityAdvisory;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated_cwe_id_null","name":"generated_name_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
