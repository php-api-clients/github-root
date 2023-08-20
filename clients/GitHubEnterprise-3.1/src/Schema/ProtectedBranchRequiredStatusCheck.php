<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON         = '{
    "title": "Protected Branch Required Status Check",
    "required": [
        "contexts"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "enforcement_level": {
            "type": "string"
        },
        "contexts": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "contexts_url": {
            "type": "string"
        },
        "strict": {
            "type": "boolean"
        }
    },
    "description": "Protected Branch Required Status Check"
}';
    public const SCHEMA_TITLE        = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION  = 'Protected Branch Required Status Check';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "enforcement_level": "generated",
    "contexts": [
        "generated",
        "generated"
    ],
    "contexts_url": "generated",
    "strict": false
}';

    public function __construct(public string|null $url, #[MapFrom('enforcement_level')]
    public string|null $enforcementLevel, public array $contexts, #[MapFrom('contexts_url')]
    public string|null $contextsUrl, public bool|null $strict,)
    {
    }
}
