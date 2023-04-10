<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ScimUser;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Roles
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"},"display":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated_value_null","primary":false,"type":"generated_type_null","display":"generated_display_null"}';
    public function __construct(public ?string $value, public ?bool $primary, public ?string $type, public ?string $display)
    {
    }
}
