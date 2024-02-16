<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesVersion;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Version
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "version": {
            "pattern": "[0-9]\\\\.[0-9]{2}\\\\.[0-9]",
            "type": "string"
        },
        "platform": {
            "enum": [
                "ami",
                "azure",
                "esx",
                "gce",
                "hyperv",
                "kvm"
            ],
            "type": "string"
        },
        "build_id": {
            "pattern": "[0-9a-f]{8}",
            "type": "string"
        },
        "build_date": {
            "type": "string",
            "format": "date"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "version": "9.99.9",
    "platform": "kvm",
    "build_id": "aaaaaaaa",
    "build_date": "generated"
}';

    public function __construct(public string|null $version, public string|null $platform, #[MapFrom('build_id')]
    public string|null $buildId, #[MapFrom('build_date')]
    public string|null $buildDate,)
    {
    }
}
