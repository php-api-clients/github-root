<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["userName","name","emails"],"type":"object","properties":{"schemas":{"type":"array","items":{"type":"string"}},"displayName":{"type":"string","description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"externalId":{"type":"string"},"groups":{"type":"array","items":{"type":"string"}},"active":{"type":"boolean"},"userName":{"type":"string","description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"name":{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"minItems":1,"type":"array","items":{"required":["value"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"},"primary":{"type":"boolean"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["generated_schemas"],"displayName":"Jon Doe","externalId":"generated_externalId","groups":["generated_groups"],"active":false,"userName":"someone@example.com","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted"},"emails":[{"type":"generated_type","value":"another@example.com","primary":false}]}';
    /**
     * @var array<string>
     */
    public array $schemas;
    /**
     * The name of the user, suitable for display to end-users
     */
    public string $displayName;
    public string $externalId;
    /**
     * @var array<string>
     */
    public array $groups;
    public bool $active;
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    public ?string $userName;
    public ?Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Name $name;
    /**
     * user emails
     * @var array<Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson\Emails>
     */
    public ?array $emails;
    public function __construct(array $schemas, string $displayName, string $externalId, array $groups, bool $active, string $userName, Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Name $name, array $emails)
    {
        $this->schemas = $schemas;
        $this->displayName = $displayName;
        $this->externalId = $externalId;
        $this->groups = $groups;
        $this->active = $active;
        $this->userName = $userName;
        $this->name = $name;
        $this->emails = $emails;
    }
}
