<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Activity\MarkNotificationsAsRead\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"last_read_at":{"type":"string","description":"Describes the last point that notifications were checked.","format":"date-time"},"read":{"type":"boolean","description":"Whether the notification has been read."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"last_read_at":"generated_last_read_at","read":false}';
    /**
     * last_read_at: Describes the last point that notifications were checked.
     * read: Whether the notification has been read.
     */
    public function __construct(public ?string $last_read_at, public ?bool $read)
    {
    }
}
