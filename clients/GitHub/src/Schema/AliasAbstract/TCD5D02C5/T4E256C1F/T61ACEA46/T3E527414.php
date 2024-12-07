<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TCD5D02C5\T4E256C1F\T61ACEA46;

use ApiClients\Client\GitHub\Contract\Actions\AddCustomLabelsToSelfHostedRunnerForOrg\Request\ApplicationJson;

abstract readonly class T3E527414 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "labels"
    ],
    "type": "object",
    "properties": {
        "labels": {
            "maxItems": 100,
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The names of the custom labels to add to the runner."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "labels": [
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated"
    ]
}';

    /**
     * labels: The names of the custom labels to add to the runner.
     */
    public function __construct(public array $labels)
    {
    }
}
