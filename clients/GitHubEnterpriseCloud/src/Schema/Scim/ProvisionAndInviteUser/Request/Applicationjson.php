<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\ProvisionAndInviteUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["userName","name","emails"],"type":"object","properties":{"userName":{"type":"string","description":"Configured by the admin. Could be an email, login, or username","examples":["someone@example.com"]},"displayName":{"type":"string","description":"The name of the user, suitable for display to end-users","examples":["Jon Doe"]},"name":{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}},"emails":{"minItems":1,"type":"array","items":{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}},"description":"user emails","examples":[{"value":"someone@example.com","primary":true},{"value":"another@example.com","primary":false}]},"schemas":{"type":"array","items":{"type":"string"}},"externalId":{"type":"string"},"groups":{"type":"array","items":{"type":"string"}},"active":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"userName":"someone@example.com","displayName":"Jon Doe","name":{"givenName":"Jane","familyName":"User","formatted":"generated_formatted"},"emails":[{"value":"another@example.com","primary":false,"type":"generated_type"}],"schemas":["generated_schemas"],"externalId":"generated_externalId","groups":["generated_groups"],"active":false}';
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    public ?string $userName;
    /**
     * The name of the user, suitable for display to end-users
     */
    public string $displayName;
    public ?Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Name $name;
    /**
     * user emails
     * @var array<Schema\ScimUser\Emails>
     */
    public ?array $emails;
    /**
     * @var array<string>
     */
    public array $schemas;
    public string $externalId;
    /**
     * @var array<string>
     */
    public array $groups;
    public bool $active;
    public function __construct(string $userName, string $displayName, Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson\Name $name, array $emails, array $schemas, string $externalId, array $groups, bool $active)
    {
        $this->userName = $userName;
        $this->displayName = $displayName;
        $this->name = $name;
        $this->emails = $emails;
        $this->schemas = $schemas;
        $this->externalId = $externalId;
        $this->groups = $groups;
        $this->active = $active;
    }
}
