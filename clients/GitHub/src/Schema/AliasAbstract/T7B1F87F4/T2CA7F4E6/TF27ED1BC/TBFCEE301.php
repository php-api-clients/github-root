<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7B1F87F4\T2CA7F4E6\TF27ED1BC;

use ApiClients\Client\GitHub\Contract\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;

abstract readonly class TBFCEE301 implements Accepted
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated"
}';

    public function __construct(public string|null $message)
    {
    }
}
