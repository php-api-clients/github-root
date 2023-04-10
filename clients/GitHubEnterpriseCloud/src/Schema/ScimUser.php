<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ScimUser
{
    public const SCHEMA_JSON = '{"title":"SCIM \\/Users","required":["id","schemas","emails","active","meta"],"type":"object","properties":{"schemas":{"minItems":1,"type":"array","items":{"type":"string","examples":["urn:ietf:params:scim:schemas:core:2.0:User"]},"description":"SCIM schema used."},"id":{"type":"string","description":"Unique identifier of an external identity","examples":["1b78eada-9baa-11e6-9eb6-a431576d590e"]},"externalId":{"type":["string","null"],"description":"The ID of the User.","examples":["a7b0f98395"]},"userName":{"type":["string","null"],"description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"displayName":{"type":["string","null"],"description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"name":{"type":"object","properties":{"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]},"formatted":{"type":["string","null"]}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"type":"array","items":{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]},"active":{"type":"boolean","description":"The active status of the User.","examples":[true]},"meta":{"type":"object","properties":{"resourceType":{"type":"string","examples":["User"]},"created":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"lastModified":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"location":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"]}}},"organization_id":{"type":"integer","description":"The ID of the organization."},"operations":{"minItems":1,"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"string"},{"type":"object"},{"type":"array","items":{}}]}}},"description":"Set of operations to be performed","examples":[{"op":"replace","value":{"active":false}}]},"groups":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"display":{"type":"string"}}},"description":"associated groups"},"roles":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"},"display":{"type":"string"}}}}},"description":"SCIM \\/Users provisioning endpoints"}';
    public const SCHEMA_TITLE = 'SCIM /Users';
    public const SCHEMA_DESCRIPTION = 'SCIM /Users provisioning endpoints';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["generated_schemas_null"],"id":"1b78eada-9baa-11e6-9eb6-a431576d590e","externalId":"a7b0f98395","userName":"someone@example.com","displayName":"Jon Doe","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted_null"},"emails":[{"value":"someone@example.com","primary":true,"type":"generated_type_null"}],"active":true,"meta":{"resourceType":"User","created":"2019-01-24T22:45:36.000Z","lastModified":"2019-01-24T22:45:36.000Z","location":"https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"},"organization_id":13,"operations":[{"op":"replace","path":"generated_path_null","value":{"0":"generated_value_null","active":false}}],"groups":[{"value":"generated_value_null","display":"generated_display_null"}],"roles":[{"value":"generated_value_null","primary":false,"type":"generated_type_null","display":"generated_display_null"}]}';
    /**
     * schemas: SCIM schema used.
     * @param array<string> $schemas
     * id: Unique identifier of an external identity
     * externalId: The ID of the User.
     * userName: Configured by the admin. Could be an email, login, or username
     * displayName: The name of the user, suitable for display to end-users
     * emails: user emails
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails> $emails
     * active: The active status of the User.
     * organizationId: The ID of the organization.
     * operations: Set of operations to be performed
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations> $operations
     * groups: associated groups
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups> $groups
     * @param ?array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles> $roles
     */
    public function __construct(public array $schemas, public string $id, public ?string $externalId, public ?string $userName, public ?string $displayName, public ?Schema\ScimUser\Name $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ScimUser\Emails::class)] public array $emails, public bool $active, public Schema\ScimUser\Meta $meta, #[\EventSauce\ObjectHydrator\MapFrom('organization_id')] public ?int $organizationId, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ScimUser\Operations::class)] public ?array $operations, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ScimUser\Groups::class)] public ?array $groups, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ScimUser\Roles::class)] public ?array $roles)
    {
    }
}
