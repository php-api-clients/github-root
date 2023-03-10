<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class OrganizationCustomRepositoryRoleUpdateSchema
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the custom role."},"description":{"type":["string","null"],"description":"A short description about who this role is for or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","base_role":"generated_base_role","permissions":["generated_permissions"]}';
    /**
     * name: The name of the custom role.
     * description: A short description about who this role is for or what permissions it grants.
     * base_role: The system role from which this role inherits permissions.
     * permissions: A list of additional permissions included in this role.
     * @param ?array<string> $permissions
     */
    public function __construct(public ?string $name, public ?string $description, public ?string $base_role, public ?array $permissions)
    {
    }
}
