<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF1752FF7\Tiet180113F4\TietB5C2D6E5;

abstract readonly class TietDBF88893
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "severity",
        "description"
    ],
    "type": "object",
    "properties": {
        "description": {
            "type": "string",
            "description": "A short description of the rule used to detect the alert."
        },
        "id": {
            "type": "string",
            "description": "A unique identifier for the rule used to detect the alert."
        },
        "severity": {
            "enum": [
                "none",
                "note",
                "warning",
                "error",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The severity of the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "description": "generated",
    "id": "generated",
    "severity": "error"
}';

    /**
     * description: A short description of the rule used to detect the alert.
     * id: A unique identifier for the rule used to detect the alert.
     * severity: The severity of the alert.
     */
    public function __construct(public string $description, public string $id, public string|null $severity)
    {
    }
}
