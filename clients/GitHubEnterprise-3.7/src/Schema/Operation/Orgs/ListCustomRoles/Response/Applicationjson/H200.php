<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Orgs\ListCustomRoles\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_count":{"type":"integer","description":"The number of custom roles in this organization","examples":[3]},"custom_roles":{"type":"array","items":{"title":"Organization Custom Repository Role","required":["id","name"],"type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the custom role."},"name":{"type":"string","description":"The name of the custom role."}},"description":"Custom repository roles created by organization administrators"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":3,"custom_roles":[{"id":13,"name":"generated_name_null"}]}';
    /**
     * totalCount: The number of custom roles in this organization
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole> $customRoles
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public ?int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('custom_roles')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\OrganizationCustomRepositoryRole::class)] public ?array $customRoles)
    {
    }
}
