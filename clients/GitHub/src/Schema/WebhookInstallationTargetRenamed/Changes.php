<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "login": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "slug": {
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": {
        "from": "generated"
    },
    "slug": {
        "from": "generated"
    }
}';

    public function __construct(public Schema\WebhookInstallationTargetRenamed\Changes\Login|null $login, public Schema\WebhookInstallationTargetRenamed\Changes\Slug|null $slug)
    {
    }
}
