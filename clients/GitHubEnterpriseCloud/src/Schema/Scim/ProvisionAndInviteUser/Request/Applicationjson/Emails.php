<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\ProvisionAndInviteUser\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Emails
{
    public const SCHEMA_JSON = '{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated_value_null","primary":false,"type":"generated_type_null"}';
    public function __construct(public string $value, public ?bool $primary, public ?string $type)
    {
    }
}
