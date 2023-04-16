<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson;

final readonly class Emails
{
    public const SCHEMA_JSON         = '{"required":["value"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"},"primary":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","value":"generated_value_null","primary":false}';

    public function __construct(public ?string $type, public string $value, public ?bool $primary)
    {
    }
}
