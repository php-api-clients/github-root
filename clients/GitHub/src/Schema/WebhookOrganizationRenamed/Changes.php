<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookOrganizationRenamed\Changes
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "login": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed\Changes\Login $login)
    {
    }
}
