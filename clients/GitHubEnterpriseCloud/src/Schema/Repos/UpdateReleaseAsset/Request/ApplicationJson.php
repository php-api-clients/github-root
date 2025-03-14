<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Repos\UpdateReleaseAsset\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The file name of the asset."
        },
        "label": {
            "type": "string",
            "description": "An alternate short description of the asset. Used in place of the filename."
        },
        "state": {
            "type": "string",
            "examples": [
                "\\"uploaded\\""
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "label": "generated",
    "state": "\\"uploaded\\""
}';

    /**
     * name: The file name of the asset.
     * label: An alternate short description of the asset. Used in place of the filename.
     */
    public function __construct(public string|null $name, public string|null $label, public string|null $state)
    {
    }
}
