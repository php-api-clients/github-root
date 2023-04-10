<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Emails
{
    public const SCHEMA_JSON = '{"required":["value"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"},"primary":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","value":"generated_value_null","primary":false}';
    public function __construct(public ?string $type, public string $value, public ?bool $primary)
    {
    }
}
