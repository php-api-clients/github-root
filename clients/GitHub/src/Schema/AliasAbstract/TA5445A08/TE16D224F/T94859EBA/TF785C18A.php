<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TA5445A08\TE16D224F\T94859EBA;

abstract readonly class TF785C18A implements \ApiClients\Client\GitHub\Contract\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "url": "generated"
}';
    public function __construct(public ?string $message, public ?string $url)
    {
    }
}
