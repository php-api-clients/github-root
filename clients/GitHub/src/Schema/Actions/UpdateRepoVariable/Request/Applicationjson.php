<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\UpdateRepoVariable\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","value":"generated_value"}';
    /**
     * name: The name of the variable.
     * value: The value of the variable.
     */
    public function __construct(public ?string $name, public ?string $value)
    {
    }
}
