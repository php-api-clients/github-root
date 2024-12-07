<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF694556E\T3CC88993\TA89F1ED7;

use ApiClients\Client\GitHub\Contract\Operations\Projects\DeleteCard\Response\ApplicationJson\Forbidden;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TAFDF4E13 implements Forbidden
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        },
        "errors": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "documentation_url": "generated",
    "errors": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl, public array|null $errors,)
    {
    }
}
