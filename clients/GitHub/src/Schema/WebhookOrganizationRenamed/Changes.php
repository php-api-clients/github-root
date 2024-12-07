<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed;

use ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed\Changes\Login;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookOrganizationRenamed\Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "login": {
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
    }
}';

    public function __construct(public Login|null $login)
    {
    }
}
