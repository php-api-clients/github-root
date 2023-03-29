<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["userName","name","emails"],"type":"object","properties":{"schemas":{"type":"array","items":{"type":"string"}},"displayName":{"type":"string","description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"externalId":{"type":"string"},"groups":{"type":"array","items":{"type":"string"}},"active":{"type":"boolean"},"userName":{"type":"string","description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"name":{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"minItems":1,"type":"array","items":{"required":["value"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"},"primary":{"type":"boolean"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["generated_schemas_null"],"displayName":"Jon Doe","externalId":"generated_externalId_null","groups":["generated_groups_null"],"active":false,"userName":"someone@example.com","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted_null"},"emails":[{"type":"generated_type_null","value":"someone@example.com","primary":true}]}';
    /**
     * @param ?array<string> $schemas
     * displayName: The name of the user, suitable for display to end-users
     * @param ?array<string> $groups
     * userName: Configured by the admin. Could be an email, login, or username
     * emails: user emails
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson\Emails> $emails
     */
    public function __construct(public ?array $schemas, public ?string $displayName, public ?string $externalId, public ?array $groups, public ?bool $active, public string $userName, public Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson\Name $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson\Emails::class)] public array $emails)
    {
    }
}
