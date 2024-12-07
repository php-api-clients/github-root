<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T84C5BF99\TACADC6EC\T8B2A32F2;

abstract readonly class T014E1E35 implements \ApiClients\Client\GitHub\Contract\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "code": {
            "type": "string"
        },
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        },
        "errors": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "code": {
                        "type": "string"
                    },
                    "message": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "code": "generated",
    "message": "generated",
    "documentation_url": "generated",
    "errors": [
        {
            "code": "generated",
            "message": "generated"
        },
        {
            "code": "generated",
            "message": "generated"
        }
    ]
}';
    public function __construct(public ?string $code, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
