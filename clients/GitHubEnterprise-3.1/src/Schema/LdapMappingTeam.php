<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class LdapMappingTeam
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ldap_dn":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ldap_dn":"generated_ldap_dn_null","id":13,"node_id":"generated_node_id_null","url":"generated_url_null","html_url":"generated_html_url_null","name":"generated_name_null","slug":"generated_slug_null","description":"generated_description_null","privacy":"generated_privacy_null","permission":"generated_permission_null","members_url":"generated_members_url_null","repositories_url":"generated_repositories_url_null","parent":null}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('ldap_dn')] public ?string $ldapDn, public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $name, public ?string $slug, public ?string $description, public ?string $privacy, public ?string $permission, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public ?string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public ?string $repositoriesUrl, public mixed $parent)
    {
    }
}
