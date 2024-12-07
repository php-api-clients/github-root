<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T38F1F00B\TF74B7C24\TCE7CBD4F;

use ApiClients\Client\GitHub\Contract\WebhookOrganizationRenamed\Changes\Login;

abstract readonly class T88FCE2CD implements Login
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    public function __construct(public string|null $from)
    {
    }
}
