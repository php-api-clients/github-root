<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Orgs\UpdateCustomRole\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the custom role."},"description":{"type":"string","description":"A short description about who this role is for or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role. If specified, these permissions will replace any currently set on the role."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","base_role":"generated_base_role","permissions":[null]}';
    /**
     * The name of the custom role.
     */
    public ?string $name;
    /**
     * A short description about who this role is for or what permissions it grants.
     */
    public ?string $description;
    /**
     * The system role from which this role inherits permissions.
     */
    public ?string $base_role;
    /**
     * A list of additional permissions included in this role. If specified, these permissions will replace any currently set on the role.
     * @var array<string>
     */
    public ?array $permissions;
    public function __construct(string $name, string $description, string $base_role, array $permissions)
    {
        $this->name = $name;
        $this->description = $description;
        $this->base_role = $base_role;
        $this->permissions = $permissions;
    }
}
