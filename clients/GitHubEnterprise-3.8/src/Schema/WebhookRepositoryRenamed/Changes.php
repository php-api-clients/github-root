<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRepositoryRenamed;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repository"
    ],
    "type": "object",
    "properties": {
        "repository": {
            "required": [
                "name"
            ],
            "type": "object",
            "properties": {
                "name": {
                    "required": [
                        "from"
                    ],
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository": {
        "name": {
            "from": "generated"
        }
    }
}';

    public function __construct(public Schema\WebhookRepositoryRenamed\Changes\Repository $repository)
    {
    }
}
