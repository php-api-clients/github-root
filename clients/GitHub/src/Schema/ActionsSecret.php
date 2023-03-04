<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsSecret
{
    public const SCHEMA_JSON = '{"title":"Actions Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for GitHub Actions."}';
    public const SCHEMA_TITLE = 'Actions Secret';
    public const SCHEMA_DESCRIPTION = 'Set secrets for GitHub Actions.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"SECRET_TOKEN","created_at":"generated_created_at","updated_at":"generated_updated_at"}';
    /**
     * The name of the secret.
     */
    public ?string $name;
    public ?string $created_at;
    public ?string $updated_at;
    public function __construct(string $name, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
