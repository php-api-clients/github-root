<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class LdapMappingTeam
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ldap_dn":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ldap_dn":"generated_ldap_dn","id":13,"node_id":"generated_node_id","url":"generated_url","html_url":"generated_html_url","name":"generated_name","slug":"generated_slug","description":"generated_description","privacy":"generated_privacy","permission":"generated_permission","members_url":"generated_members_url","repositories_url":"generated_repositories_url","parent":null}';
    public function __construct(public ?string $ldap_dn, public ?int $id, public ?string $node_id, public ?string $url, public ?string $html_url, public ?string $name, public ?string $slug, public ?string $description, public ?string $privacy, public ?string $permission, public ?string $members_url, public ?string $repositories_url, public mixed $parent)
    {
    }
}
