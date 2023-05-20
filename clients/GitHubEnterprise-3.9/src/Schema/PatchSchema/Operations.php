<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\PatchSchema;

final readonly class Operations
{
    public const SCHEMA_JSON         = '{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"op":"remove","path":"generated","value":"generated"}';

    /**
     * value: Corresponding 'value' of that field specified by 'path'
     */
    public function __construct(public string $op, public ?string $path, public ?string $value)
    {
    }
}
