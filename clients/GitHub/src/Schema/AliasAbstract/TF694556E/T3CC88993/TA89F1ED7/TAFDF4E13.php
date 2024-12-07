<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF694556E\T3CC88993\TA89F1ED7;

abstract readonly class TAFDF4E13 implements \ApiClients\Client\GitHub\Contract\Operations\Projects\DeleteCard\Response\ApplicationJson\Forbidden
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "documentation_url": "generated",
    "errors": [
        "generated",
        "generated"
    ]
}';
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
