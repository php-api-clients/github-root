<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T5C961863\T8BA1DB48\TBD941DB1;

use ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo;

abstract readonly class T93572200 implements Repo
{
    public const SCHEMA_JSON         = '{
    "title": "Repo Ref",
    "required": [
        "id",
        "url",
        "name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Repo Ref';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public int $id, public string $name, public string $url)
    {
    }
}
