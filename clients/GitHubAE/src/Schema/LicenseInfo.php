<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class LicenseInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"seats":{"oneOf":[{"type":"string"},{"type":"integer"}]},"seats_used":{"type":"integer"},"seats_available":{"oneOf":[{"type":"string"},{"type":"integer"}]},"kind":{"type":"string"},"days_until_expiration":{"type":"integer"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":"generated_seats","seats_used":13,"seats_available":"generated_seats_available","kind":"generated_kind","days_until_expiration":13,"expire_at":"generated_expire_at"}';
    public mixed $seats;
    public ?int $seats_used;
    public mixed $seats_available;
    public ?string $kind;
    public ?int $days_until_expiration;
    public ?string $expire_at;
    public function __construct(mixed $seats, int $seats_used, mixed $seats_available, string $kind, int $days_until_expiration, string $expire_at)
    {
        $this->seats = $seats;
        $this->seats_used = $seats_used;
        $this->seats_available = $seats_available;
        $this->kind = $kind;
        $this->days_until_expiration = $days_until_expiration;
        $this->expire_at = $expire_at;
    }
}
