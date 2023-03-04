<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class UserEmailsResponse
{
    public const SCHEMA_JSON = '{"required":["value"],"type":"object","properties":{"value":{"type":"string","description":"The email address.","examples":["mlisa@example.com"]},"type":{"type":"string","description":"The type of email address.","examples":["work"]},"primary":{"type":"boolean","description":"Whether this email address is the primary address.","examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"mlisa@example.com","type":"work","primary":true}';
    /**
     * The email address.
     */
    public ?string $value;
    /**
     * The type of email address.
     */
    public string $type;
    /**
     * Whether this email address is the primary address.
     */
    public bool $primary;
    public function __construct(string $value, string $type, bool $primary)
    {
        $this->value = $value;
        $this->type = $type;
        $this->primary = $primary;
    }
}
