<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class SshKey
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"key":{"type":"string"},"pretty-print":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key_null","pretty_MINUS_print":"generated_pretty_MINUS_print_null"}';
    public function __construct(public ?string $key, #[\EventSauce\ObjectHydrator\MapFrom('pretty_MINUS_print')] public ?string $prettyMinusPrint)
    {
    }
}
