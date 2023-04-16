<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class License
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"seats":13,"evaluation":false,"perpetual":false,"unlimited_seating":false,"support_key":"generated_support_key_null","ssh_allowed":false,"cluster_support":false,"expire_at":"generated_expire_at_null"}';

    public function __construct(public ?int $seats, public ?bool $evaluation, public ?bool $perpetual, #[MapFrom('unlimited_seating')] public ?bool $unlimitedSeating, #[MapFrom('support_key')] public ?string $supportKey, #[MapFrom('ssh_allowed')] public ?bool $sshAllowed, #[MapFrom('cluster_support')] public ?bool $clusterSupport, #[MapFrom('expire_at')] public ?string $expireAt)
    {
    }
}
