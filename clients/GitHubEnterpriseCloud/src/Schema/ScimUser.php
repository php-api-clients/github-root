<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ScimUser
{
    public const SCHEMA_JSON = '{"title":"SCIM \\/Users","required":["id","schemas","emails","active","meta"],"type":"object","properties":{"schemas":{"minItems":1,"type":"array","items":{"type":"string","examples":["urn:ietf:params:scim:schemas:core:2.0:User"]},"description":"SCIM schema used."},"id":{"type":"string","description":"Unique identifier of an external identity","examples":["1b78eada-9baa-11e6-9eb6-a431576d590e"]},"externalId":{"type":["string","null"],"description":"The ID of the User.","examples":["a7b0f98395"]},"userName":{"type":["string","null"],"description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"displayName":{"type":["string","null"],"description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"name":{"type":"object","properties":{"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]},"formatted":{"type":["string","null"]}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"type":"array","items":{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]},"active":{"type":"boolean","description":"The active status of the User.","examples":[true]},"meta":{"type":"object","properties":{"resourceType":{"type":"string","examples":["User"]},"created":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"lastModified":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"location":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"]}}},"organization_id":{"type":"integer","description":"The ID of the organization."},"operations":{"minItems":1,"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"string"},{"type":"object"},{"type":"array","items":{}}]}}},"description":"Set of operations to be performed","examples":[{"op":"replace","value":{"active":false}}]},"groups":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"display":{"type":"string"}}},"description":"associated groups"},"roles":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"},"display":{"type":"string"}}}}},"description":"SCIM \\/Users provisioning endpoints"}';
    public const SCHEMA_TITLE = 'SCIM /Users';
    public const SCHEMA_DESCRIPTION = 'SCIM /Users provisioning endpoints';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":[null],"id":"1b78eada-9baa-11e6-9eb6-a431576d590e","externalId":"a7b0f98395","userName":"someone@example.com","displayName":"Jon Doe","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted"},"emails":[{"value":"another@example.com","primary":false}],"active":true,"meta":{"resourceType":"User","created":"2019-01-24T22:45:36.000Z","lastModified":"2019-01-24T22:45:36.000Z","location":"https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"},"organization_id":13,"operations":[{"op":"replace","value":{"active":false}}],"groups":[null],"roles":[null]}';
    /**
     * SCIM schema used.
     * @var array<string>
     */
    public ?array $schemas;
    /**
     * Unique identifier of an external identity
     */
    public ?string $id;
    /**
     * The ID of the User.
     */
    public ?string $externalId;
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    public ?string $userName;
    /**
     * The name of the user, suitable for display to end-users
     */
    public ?string $displayName;
    public Schema\ScimUser\Name $name;
    /**
     * user emails
     * @var array<Schema\ScimUser\Emails>
     */
    public ?array $emails;
    /**
     * The active status of the User.
     */
    public ?bool $active;
    public ?Schema\ScimUser\Meta $meta;
    /**
     * The ID of the organization.
     */
    public int $organization_id;
    /**
     * Set of operations to be performed
     * @var array<Schema\ScimUser\Operations>
     */
    public array $operations;
    /**
     * associated groups
     * @var array<Schema\ScimUser\Groups>
     */
    public array $groups;
    /**
     * @var array<Schema\ScimUser\Roles>
     */
    public array $roles;
    public function __construct(array $schemas, string $id, string $externalId, string $userName, string $displayName, Schema\ScimUser\Name $name, array $emails, bool $active, Schema\ScimUser\Meta $meta, int $organization_id, array $operations, array $groups, array $roles)
    {
        $this->schemas = $schemas;
        $this->id = $id;
        $this->externalId = $externalId;
        $this->userName = $userName;
        $this->displayName = $displayName;
        $this->name = $name;
        $this->emails = $emails;
        $this->active = $active;
        $this->meta = $meta;
        $this->organization_id = $organization_id;
        $this->operations = $operations;
        $this->groups = $groups;
        $this->roles = $roles;
    }
}
