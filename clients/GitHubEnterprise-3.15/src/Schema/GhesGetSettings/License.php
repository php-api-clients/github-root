<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class License
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "seats": {
            "type": "integer"
        },
        "evaluation": {
            "type": "boolean"
        },
        "perpetual": {
            "type": "boolean"
        },
        "unlimited_seating": {
            "type": "boolean"
        },
        "support_key": {
            "type": "string"
        },
        "ssh_allowed": {
            "type": "boolean"
        },
        "cluster_support": {
            "type": "boolean"
        },
        "expire_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "seats": 5,
    "evaluation": false,
    "perpetual": false,
    "unlimited_seating": false,
    "support_key": "generated",
    "ssh_allowed": false,
    "cluster_support": false,
    "expire_at": "generated"
}';

    public function __construct(public int|null $seats, public bool|null $evaluation, public bool|null $perpetual, #[MapFrom('unlimited_seating')]
    public bool|null $unlimitedSeating, #[MapFrom('support_key')]
    public string|null $supportKey, #[MapFrom('ssh_allowed')]
    public bool|null $sshAllowed, #[MapFrom('cluster_support')]
    public bool|null $clusterSupport, #[MapFrom('expire_at')]
    public string|null $expireAt,)
    {
    }
}
