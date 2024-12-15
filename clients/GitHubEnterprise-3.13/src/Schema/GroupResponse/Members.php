<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Members
{
    public const SCHEMA_JSON         = '{
    "required": [
        "value",
        "$ref"
    ],
    "type": "object",
    "properties": {
        "value": {
            "type": "string",
            "description": "The local unique identifier for the member",
            "examples": [
                "23a35c27-23d3-4c03-b4c5-6443c09e7173"
            ]
        },
        "$ref": {
            "type": "string"
        },
        "display": {
            "type": "string",
            "description": "The display name associated with the member",
            "examples": [
                "Monalisa Octocat"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "value": "23a35c27-23d3-4c03-b4c5-6443c09e7173",
    "$ref": "generated",
    "display": "Monalisa Octocat"
}';

    /**
     * value: The local unique identifier for the member
     * display: The display name associated with the member
     */
    public function __construct(public string $value, #[MapFrom('$ref')]
    public string $dollarRef, public string|null $display,)
    {
    }
}
