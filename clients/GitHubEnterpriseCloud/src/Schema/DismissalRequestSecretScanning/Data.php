<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\DismissalRequestSecretScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "secret_type": {
            "type": "string",
            "description": "The type of secret that was detected"
        },
        "alert_number": {
            "type": "string",
            "description": "The number of the alert that was detected"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "secret_type": "generated",
    "alert_number": "generated"
}';

    /**
     * secretType: The type of secret that was detected
     * alertNumber: The number of the alert that was detected
     */
    public function __construct(#[MapFrom('secret_type')]
    public string|null $secretType, #[MapFrom('alert_number')]
    public string|null $alertNumber,)
    {
    }
}
