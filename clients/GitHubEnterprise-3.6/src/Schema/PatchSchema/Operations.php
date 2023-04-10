<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PatchSchema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Operations
{
    public const SCHEMA_JSON = '{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"op":"add","path":"generated_path_null","value":"generated_value_null"}';
    /**
     * value: Corresponding 'value' of that field specified by 'path'
     */
    public function __construct(public string $op, public ?string $path, public ?string $value)
    {
    }
}
