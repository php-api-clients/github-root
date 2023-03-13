<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class UserEmails
{
    public const SCHEMA_JSON = '{"required":["value","type","primary"],"type":"object","properties":{"value":{"type":"string","description":"The email address.","examples":["mlisa@example.com"]},"type":{"type":"string","description":"The type of email address.","examples":["work"]},"primary":{"type":"boolean","description":"Whether this email address is the primary address.","examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"mlisa@example.com","type":"work","primary":true}';
    /**
     * value: The email address.
     * type: The type of email address.
     * primary: Whether this email address is the primary address.
     */
    public function __construct(public string $value, public string $type, public bool $primary)
    {
    }
}
