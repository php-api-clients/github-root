<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class LicenseInfo
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"seats":{"oneOf":[{"type":"string"},{"type":"integer"}]},"seats_used":{"type":"integer"},"seats_available":{"oneOf":[{"type":"string"},{"type":"integer"}]},"kind":{"type":"string"},"days_until_expiration":{"type":"integer"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":null,"seats_used":10,"seats_available":null,"kind":"generated","days_until_expiration":21,"expire_at":"generated"}';

    public function __construct(public string|int|null $seats, #[MapFrom('seats_used')]
    public int|null $seatsUsed, #[MapFrom('seats_available')]
    public string|int|null $seatsAvailable, public string|null $kind, #[MapFrom('days_until_expiration')]
    public int|null $daysUntilExpiration, #[MapFrom('expire_at')]
    public string|null $expireAt,)
    {
    }
}
