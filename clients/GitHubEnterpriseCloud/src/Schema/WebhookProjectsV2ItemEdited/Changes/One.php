<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookProjectsV2ItemEdited\Changes;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class One
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body"
    ],
    "type": "object",
    "properties": {
        "body": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated",
        "to": "generated"
    }
}';

    public function __construct(public Schema\WebhookProjectsV2ItemEdited\Changes\One\Body $body)
    {
    }
}
