<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Activity\MarkNotificationsAsRead\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message"}';
    public function __construct(public ?string $message)
    {
    }
}
