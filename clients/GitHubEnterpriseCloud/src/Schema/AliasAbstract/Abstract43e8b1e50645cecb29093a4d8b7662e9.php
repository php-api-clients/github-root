<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
abstract readonly class Abstract43e8b1e50645cecb29093a4d8b7662e9
{
    public const SCHEMA_JSON = '{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organization_billing_email":"generated_organization_billing_email_null","type":"generated_type_null"}';
    public function __construct(public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organization_billing_email')] public ?string $organizationBillingEmail, public string $type)
    {
    }
}
