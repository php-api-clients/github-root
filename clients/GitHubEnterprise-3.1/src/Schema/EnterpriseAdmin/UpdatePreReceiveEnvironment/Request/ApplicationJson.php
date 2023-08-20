<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdatePreReceiveEnvironment\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "This pre-receive environment\'s new name."
        },
        "image_url": {
            "type": "string",
            "description": "URL from which to download a tarball of this environment."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "image_url": "generated"
}';

    /**
     * name: This pre-receive environment's new name.
     * imageUrl: URL from which to download a tarball of this environment.
     */
    public function __construct(public string|null $name, #[MapFrom('image_url')]
    public string|null $imageUrl,)
    {
    }
}
