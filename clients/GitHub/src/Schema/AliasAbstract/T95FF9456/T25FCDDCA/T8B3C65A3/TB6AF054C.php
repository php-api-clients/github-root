<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T95FF9456\T25FCDDCA\T8B3C65A3;

abstract readonly class TB6AF054C implements \ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\DockerMetadata
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "tags": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "tags": [
        "generated",
        "generated"
    ]
}';
    public function __construct(public ?array $tags)
    {
    }
}
