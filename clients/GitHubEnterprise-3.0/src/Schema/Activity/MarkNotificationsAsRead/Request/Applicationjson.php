<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Activity\MarkNotificationsAsRead\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"last_read_at":{"type":"string","description":"Describes the last point that notifications were checked.","format":"date-time"},"read":{"type":"boolean","description":"Whether the notification has been read."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"last_read_at":"1970-01-01T00:00:00+00:00","read":false}';
    /**
     * lastReadAt: Describes the last point that notifications were checked.
     * read: Whether the notification has been read.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('last_read_at')] public ?string $lastReadAt, public ?bool $read)
    {
    }
}
