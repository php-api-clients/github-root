<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\CreateHostedRunnerForOrg\Request\ApplicationJson;

final readonly class Image
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "The unique identifier of the runner image."
        },
        "source": {
            "enum": [
                "github",
                "partner",
                "custom"
            ],
            "type": "string",
            "description": "The source of the runner image."
        }
    },
    "description": "The image of runner. To list all available images, use `GET \\/actions\\/hosted-runners\\/images\\/github-owned` or `GET \\/actions\\/hosted-runners\\/images\\/partner`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The image of runner. To list all available images, use `GET /actions/hosted-runners/images/github-owned` or `GET /actions/hosted-runners/images/partner`.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "source": "custom"
}';

    /**
     * id: The unique identifier of the runner image.
     * source: The source of the runner image.
     */
    public function __construct(public string|null $id, public string|null $source)
    {
    }
}
