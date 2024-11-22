<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson;

final readonly class UnprocessableEntity
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
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
    "errors": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public array|null $errors)
    {
    }
}
