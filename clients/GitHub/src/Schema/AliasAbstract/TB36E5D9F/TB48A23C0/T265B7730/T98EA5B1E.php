<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TB36E5D9F\TB48A23C0\T265B7730;

use ApiClients\Client\GitHub\Contract\Checks\Create\Request\ApplicationJson\Output\Images;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T98EA5B1E implements Images
{
    public const SCHEMA_JSON         = '{
    "required": [
        "alt",
        "image_url"
    ],
    "type": "object",
    "properties": {
        "alt": {
            "type": "string",
            "description": "The alternative text for the image."
        },
        "image_url": {
            "type": "string",
            "description": "The full URL of the image."
        },
        "caption": {
            "type": "string",
            "description": "A short image description."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "alt": "generated",
    "image_url": "generated",
    "caption": "generated"
}';

    /**
     * alt: The alternative text for the image.
     * imageUrl: The full URL of the image.
     * caption: A short image description.
     */
    public function __construct(public string $alt, #[MapFrom('image_url')]
    public string $imageUrl, public string|null $caption,)
    {
    }
}
