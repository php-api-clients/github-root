<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranch;

final readonly class RequiredConversationResolution
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false
}';

    public function __construct(public bool|null $enabled)
    {
    }
}
