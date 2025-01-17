<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsHostedRunnerImage
{
    public const SCHEMA_JSON         = '{
    "title": "GitHub-hosted runner image details.",
    "required": [
        "id",
        "platform",
        "size_gb",
        "display_name",
        "source"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "The ID of the image. Use this ID for the `image` parameter when creating a new larger runner.",
            "examples": [
                "ubuntu-20.04"
            ]
        },
        "platform": {
            "type": "string",
            "description": "The operating system of the image.",
            "examples": [
                "linux-x64"
            ]
        },
        "size_gb": {
            "type": "integer",
            "description": "Image size in GB.",
            "examples": [
                86
            ]
        },
        "display_name": {
            "type": "string",
            "description": "Display name for this image.",
            "examples": [
                20.04
            ]
        },
        "source": {
            "enum": [
                "github",
                "partner",
                "custom"
            ],
            "type": "string",
            "description": "The image provider."
        }
    },
    "description": "Provides details of a hosted runner image"
}';
    public const SCHEMA_TITLE        = 'GitHub-hosted runner image details.';
    public const SCHEMA_DESCRIPTION  = 'Provides details of a hosted runner image';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "ubuntu-20.04",
    "platform": "linux-x64",
    "size_gb": 86,
    "display_name": 20.04,
    "source": "custom"
}';

    /**
     * id: The ID of the image. Use this ID for the `image` parameter when creating a new larger runner.
     * platform: The operating system of the image.
     * sizeGb: Image size in GB.
     * displayName: Display name for this image.
     * source: The image provider.
     */
    public function __construct(public string $id, public string $platform, #[MapFrom('size_gb')]
    public int $sizeGb, #[MapFrom('display_name')]
    public string $displayName, public string $source,)
    {
    }
}
