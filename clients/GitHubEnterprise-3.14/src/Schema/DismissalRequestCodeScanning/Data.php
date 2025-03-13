<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\DismissalRequestCodeScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "alert_number": {
            "type": "string",
            "description": "The number of the alert to be dismissed"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "alert_number": "generated"
}';

    /**
     * alertNumber: The number of the alert to be dismissed
     */
    public function __construct(#[MapFrom('alert_number')]
    public string|null $alertNumber,)
    {
    }
}
