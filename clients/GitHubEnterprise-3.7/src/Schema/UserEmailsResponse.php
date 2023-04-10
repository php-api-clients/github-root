<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class UserEmailsResponse
{
    public const SCHEMA_JSON = '{"required":["value"],"type":"object","properties":{"value":{"type":"string","description":"The email address.","examples":["mlisa@example.com"]},"type":{"type":"string","description":"The type of email address.","examples":["work"]},"primary":{"type":"boolean","description":"Whether this email address is the primary address.","examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"mlisa@example.com","type":"work","primary":true}';
    /**
     * value: The email address.
     * type: The type of email address.
     * primary: Whether this email address is the primary address.
     */
    public function __construct(public string $value, public ?string $type, public ?bool $primary)
    {
    }
}
