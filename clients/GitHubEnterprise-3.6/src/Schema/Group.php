<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Group
{
    public const SCHEMA_JSON = '{"required":["schemas","externalId","displayName","members"],"type":"object","properties":{"schemas":{"type":"array","items":{"enum":["urn:ietf:params:scim:schemas:core:2.0:Group"],"type":"string"},"description":"The URIs that are used to indicate the namespaces of the SCIM schemas.","examples":["urn:ietf:params:scim:schemas:core:2.0:Group"]},"externalId":{"type":"string","description":"A unique identifier for the resource as defined by the provisioning client.","examples":["8aa1a0c0-c4c3-4bc0-b4a5-2ef676900159"]},"displayName":{"type":"string","description":"A human-readable name for a security group.","examples":["Engineering"]},"members":{"type":"array","items":{"required":["value","displayName"],"type":"object","properties":{"value":{"type":"string","description":"The local unique identifier for the member","examples":["23a35c27-23d3-4c03-b4c5-6443c09e7173"]},"displayName":{"type":"string","description":"The display name associated with the member","examples":["Monalisa Octocat"]}}},"description":"The group members."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["urn:ietf:params:scim:schemas:core:2.0:Group"],"externalId":"8aa1a0c0-c4c3-4bc0-b4a5-2ef676900159","displayName":"Engineering","members":[{"value":"23a35c27-23d3-4c03-b4c5-6443c09e7173","displayName":"Monalisa Octocat"}]}';
    /**
     * schemas: The URIs that are used to indicate the namespaces of the SCIM schemas.
     * @param array<string> $schemas
     * externalId: A unique identifier for the resource as defined by the provisioning client.
     * displayName: A human-readable name for a security group.
     * members: The group members.
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\Group\Members> $members
     */
    public function __construct(public array $schemas, public string $externalId, public string $displayName, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Group\Members::class)] public array $members)
    {
    }
}
