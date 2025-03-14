<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PageDeployment
{
    public const SCHEMA_JSON         = '{
    "title": "GitHub Pages",
    "required": [
        "id",
        "status_url",
        "page_url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "oneOf": [
                {
                    "type": "integer"
                },
                {
                    "type": "string"
                }
            ],
            "description": "The ID of the GitHub Pages deployment. This is the Git SHA of the deployed commit."
        },
        "status_url": {
            "type": "string",
            "description": "The URI to monitor GitHub Pages deployment status.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/deployments\\/4fd754f7e594640989b406850d0bc8f06a121251"
            ]
        },
        "page_url": {
            "type": "string",
            "description": "The URI to the deployed GitHub Pages.",
            "format": "uri",
            "examples": [
                "hello-world.github.io"
            ]
        },
        "preview_url": {
            "type": "string",
            "description": "The URI to the deployed GitHub Pages preview.",
            "format": "uri",
            "examples": [
                "monalisa-1231a2312sa32-23sda74.drafts.github.io"
            ]
        }
    },
    "description": "The GitHub Pages deployment status."
}';
    public const SCHEMA_TITLE        = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION  = 'The GitHub Pages deployment status.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": null,
    "status_url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/deployments\\/4fd754f7e594640989b406850d0bc8f06a121251",
    "page_url": "hello-world.github.io",
    "preview_url": "monalisa-1231a2312sa32-23sda74.drafts.github.io"
}';

    /**
     * id: The ID of the GitHub Pages deployment. This is the Git SHA of the deployed commit.
     * statusUrl: The URI to monitor GitHub Pages deployment status.
     * pageUrl: The URI to the deployed GitHub Pages.
     * previewUrl: The URI to the deployed GitHub Pages preview.
     */
    public function __construct(public int|string $id, #[MapFrom('status_url')]
    public string $statusUrl, #[MapFrom('page_url')]
    public string $pageUrl, #[MapFrom('preview_url')]
    public string|null $previewUrl,)
    {
    }
}
