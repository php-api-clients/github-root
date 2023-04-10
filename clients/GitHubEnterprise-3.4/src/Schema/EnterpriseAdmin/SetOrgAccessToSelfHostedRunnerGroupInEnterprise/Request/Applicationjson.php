<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_organization_ids"],"type":"object","properties":{"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs that can access the runner group."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_organization_ids":[13]}';
    /**
     * selectedOrganizationIds: List of organization IDs that can access the runner group.
     * @param array<int> $selectedOrganizationIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_organization_ids')] public array $selectedOrganizationIds)
    {
    }
}
