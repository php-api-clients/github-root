<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class LicenseInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"seats":{"oneOf":[{"type":"string"},{"type":"integer"}]},"seats_used":{"type":"integer"},"seats_available":{"oneOf":[{"type":"string"},{"type":"integer"}]},"kind":{"type":"string"},"days_until_expiration":{"type":"integer"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":"generated_seats","seats_used":13,"seats_available":"generated_seats_available","kind":"generated_kind","days_until_expiration":13,"expire_at":"generated_expire_at"}';
    public function __construct(public ?string $seats, public ?int $seats_used, public ?string $seats_available, public ?string $kind, public ?int $days_until_expiration, public ?string $expire_at)
    {
    }
}
