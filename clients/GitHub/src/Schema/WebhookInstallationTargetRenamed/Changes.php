<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Changes\Login;
use ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Changes\Slug;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookInstallationTargetRenamed\Changes
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

    public function __construct(public Login|null $login, public Slug|null $slug)
    {
    }
}
