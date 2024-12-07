<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Snapshot;

final readonly class Detector implements \ApiClients\Client\GitHub\Contract\Snapshot\Detector
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "version",
        "url"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the detector used.",
            "examples": [
                "docker buildtime detector"
            ]
        },
        "version": {
            "type": "string",
            "description": "The version of the detector used.",
            "examples": [
                "1.0.0"
            ]
        },
        "url": {
            "type": "string",
            "description": "The url of the detector used.",
            "examples": [
                "http:\\/\\/example.com\\/docker-buildtimer-detector"
            ]
        }
    },
    "description": "A description of the detector used.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A description of the detector used.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "version": "generated",
    "url": "generated"
}';

    /**
     * name: The name of the detector used.
     * version: The version of the detector used.
     * url: The url of the detector used.
     */
    public function __construct(public string $name, public string $version, public string $url)
    {
    }
}
