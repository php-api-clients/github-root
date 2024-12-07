<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TACA2ABF1\T1486B169\T8AB0E7A7;

use ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag;

abstract readonly class T4B4F1024 implements Tag
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "digest": {
            "type": "string"
        },
        "name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "digest": "generated",
    "name": "generated"
}';

    public function __construct(public string|null $digest, public string|null $name)
    {
    }
}
