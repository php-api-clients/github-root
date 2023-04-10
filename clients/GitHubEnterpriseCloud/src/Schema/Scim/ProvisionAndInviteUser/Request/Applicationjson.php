<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\ProvisionAndInviteUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["userName","name","emails"],"type":"object","properties":{"userName":{"type":"string","description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"displayName":{"type":"string","description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"name":{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"minItems":1,"type":"array","items":{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]},"schemas":{"type":"array","items":{"type":"string"}},"externalId":{"type":"string"},"groups":{"type":"array","items":{"type":"string"}},"active":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"userName":"someone@example.com","displayName":"Jon Doe","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted_null"},"emails":[{"value":"someone@example.com","primary":true,"type":"generated_type_null"}],"schemas":["generated_schemas_null"],"externalId":"generated_externalId_null","groups":["generated_groups_null"],"active":false}';
    /**
     * userName: Configured by the admin. Could be an email, login, or username
     * displayName: The name of the user, suitable for display to end-users
     * emails: user emails
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Emails> $emails
     * @param ?array<string> $schemas
     * @param ?array<string> $groups
     */
    public function __construct(public string $userName, public ?string $displayName, public Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Name $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Emails::class)] public array $emails, public ?array $schemas, public ?string $externalId, public ?array $groups, public ?bool $active)
    {
    }
}
