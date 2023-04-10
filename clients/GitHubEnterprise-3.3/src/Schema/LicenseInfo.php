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
    public const SCHEMA_EXAMPLE_DATA = '{"seats":"generated_seats_null","seats_used":13,"seats_available":"generated_seats_available_null","kind":"generated_kind_null","days_until_expiration":13,"expire_at":"generated_expire_at_null"}';
    public function __construct(public ?string $seats, #[\EventSauce\ObjectHydrator\MapFrom('seats_used')] public ?int $seatsUsed, #[\EventSauce\ObjectHydrator\MapFrom('seats_available')] public ?string $seatsAvailable, public ?string $kind, #[\EventSauce\ObjectHydrator\MapFrom('days_until_expiration')] public ?int $daysUntilExpiration, #[\EventSauce\ObjectHydrator\MapFrom('expire_at')] public ?string $expireAt)
    {
    }
}
