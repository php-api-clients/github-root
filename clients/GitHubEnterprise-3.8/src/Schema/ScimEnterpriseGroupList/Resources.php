<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Resources
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"string","description":"The internally generated id for the group object.","examples":["7fce0092-d52e-4f76-b727-3955bd72c939"]},"members":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"$ref":{"type":"string"},"display":{"type":"string"}}},"description":"The security group members.","examples":[{"value":"879db59-3bdf-4490-ad68-ab880a2694745","$+ref":"https:\\/\\/api.github.localhost\\/scim\\/v2\\/Users\\/879db59-3bdf-4490-ad68-ab880a2694745","displayName":"User 1"},{"value":"0db508eb-91e2-46e4-809c-30dcbda0c685","$+ref":"https:\\/\\/api.github.localhost\\/scim\\/v2\\/Users\\/0db508eb-91e2-46e4-809c-30dcbda0c685","displayName":"User 2"}]},"meta":{"required":["resourceType"],"type":"object","properties":{"resourceType":{"enum":["User","Group"],"type":"string","description":"A type of a resource","examples":["User"]},"created":{"type":"string","description":"A date and time when the user was created.","examples":["2022-03-27T19:59:26.000Z"]},"lastModified":{"type":"string","description":"A data and time when the user was last modified.","examples":["2022-03-27T19:59:26.000Z"]},"location":{"type":"string","description":"A URL location of an object"}},"description":"The metadata associated with the creation\\/updates to the user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"7fce0092-d52e-4f76-b727-3955bd72c939","members":[{"value":"879db59-3bdf-4490-ad68-ab880a2694745","$+ref":"https:\\/\\/api.github.localhost\\/scim\\/v2\\/Users\\/879db59-3bdf-4490-ad68-ab880a2694745","displayName":"User 1"}],"meta":{"resourceType":"User","created":"2022-03-27T19:59:26.000Z","lastModified":"2022-03-27T19:59:26.000Z","location":"generated_location"}}';
    /**
     * The internally generated id for the group object.
     */
    public ?string $id;
    /**
     * The security group members.
     * @var array<Schema\ScimEnterpriseGroupList\Resources\Members>
     */
    public ?array $members;
    /**
     * The metadata associated with the creation/updates to the user.
     */
    public ?Schema\Meta $meta;
    public function __construct(string $id, array $members, Schema\Meta $meta)
    {
        $this->id = $id;
        $this->members = $members;
        $this->meta = $meta;
    }
}
