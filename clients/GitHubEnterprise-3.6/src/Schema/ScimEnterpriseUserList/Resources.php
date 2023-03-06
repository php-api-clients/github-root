<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Resources
{
    public const SCHEMA_JSON = '{"required":["id","meta"],"type":"object","properties":{"id":{"type":"string","description":"The internally generated id for the user object.","examples":["7fce0092-d52e-4f76-b727-3955bd72c939"]},"groups":{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"$ref":{"type":"string"},"display":{"type":"string"}}},"description":"Provisioned SCIM groups that the user is a member of."},"meta":{"required":["resourceType"],"type":"object","properties":{"resourceType":{"enum":["User","Group"],"type":"string","description":"A type of a resource","examples":["User"]},"created":{"type":"string","description":"A date and time when the user was created.","examples":["2022-03-27T19:59:26.000Z"]},"lastModified":{"type":"string","description":"A data and time when the user was last modified.","examples":["2022-03-27T19:59:26.000Z"]},"location":{"type":"string","description":"A URL location of an object"}},"description":"The metadata associated with the creation\\/updates to the user."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"7fce0092-d52e-4f76-b727-3955bd72c939","groups":[{"value":"generated_value","ref":"generated_ref","display":"generated_display"}],"meta":{"resourceType":"User","created":"2022-03-27T19:59:26.000Z","lastModified":"2022-03-27T19:59:26.000Z","location":"generated_location"}}';
    /**
     * The internally generated id for the user object.
     */
    public ?string $id;
    /**
     * Provisioned SCIM groups that the user is a member of.
     * @var array<Schema\ScimEnterpriseGroupList\Resources\Members>
     */
    public array $groups;
    /**
     * The metadata associated with the creation/updates to the user.
     */
    public ?Schema\Meta $meta;
    public function __construct(string $id, array $groups, Schema\Meta $meta)
    {
        $this->id = $id;
        $this->groups = $groups;
        $this->meta = $meta;
    }
}
