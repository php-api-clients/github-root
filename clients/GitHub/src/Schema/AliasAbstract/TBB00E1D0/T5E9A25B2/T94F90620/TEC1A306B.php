<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TBB00E1D0\T5E9A25B2\T94F90620;

abstract readonly class TEC1A306B implements \ApiClients\Client\GitHub\Contract\SecurityAndAnalysis\AdvancedSecurity
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "enabled",
                "disabled"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "status": "enabled"
}';
    public function __construct(public ?string $status)
    {
    }
}
