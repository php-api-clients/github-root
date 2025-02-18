<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet291BD1CB\TietF6B97AC1\Tiet36E0CD05;

abstract readonly class Tiet2426F5B8
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "date": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "email": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "name": "generated",
    "email": "generated"
}';

    public function __construct(public string|null $date, public string|null $name, public string|null $email)
    {
    }
}
