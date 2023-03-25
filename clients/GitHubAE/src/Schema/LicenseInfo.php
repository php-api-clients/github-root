<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class LicenseInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"seats":{"oneOf":[{"type":"string"},{"type":"integer"}]},"seats_used":{"type":"integer"},"seats_available":{"oneOf":[{"type":"string"},{"type":"integer"}]},"kind":{"type":"string"},"days_until_expiration":{"type":"integer"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":"generated_seats_null","seatsUsed":13,"seatsAvailable":"generated_seats_available_null","kind":"generated_kind_null","daysUntilExpiration":13,"expireAt":"generated_expire_at_null"}';
    public function __construct(public ?string $seats, #[\EventSauce\ObjectHydrator\MapFrom('seats_used')] public ?int $seatsUsed, #[\EventSauce\ObjectHydrator\MapFrom('seats_available')] public ?string $seatsAvailable, public ?string $kind, #[\EventSauce\ObjectHydrator\MapFrom('days_until_expiration')] public ?int $daysUntilExpiration, #[\EventSauce\ObjectHydrator\MapFrom('expire_at')] public ?string $expireAt)
    {
    }
}
