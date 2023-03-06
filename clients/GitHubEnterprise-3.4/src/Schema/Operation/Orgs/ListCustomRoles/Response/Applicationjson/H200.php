<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Orgs\ListCustomRoles\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_count":{"type":"integer","description":"The number of custom roles in this organization","examples":[3]},"custom_roles":{"type":"array","items":{"title":"Organization Custom Repository Role","required":["id","name"],"type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the custom role."},"name":{"type":"string","description":"The name of the custom role."}},"description":"Custom repository roles created by organization administrators"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":3,"custom_roles":[{"id":13,"name":"generated_name"}]}';
    /**
     * The number of custom roles in this organization
     */
    public ?int $total_count;
    /**
     * @var array<Schema\OrganizationCustomRepositoryRole>
     */
    public ?array $custom_roles;
    public function __construct(int $total_count, array $custom_roles)
    {
        $this->total_count = $total_count;
        $this->custom_roles = $custom_roles;
    }
}
