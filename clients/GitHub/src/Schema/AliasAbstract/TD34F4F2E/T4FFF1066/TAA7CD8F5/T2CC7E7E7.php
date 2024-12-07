<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD34F4F2E\T4FFF1066\TAA7CD8F5;

use ApiClients\Client\GitHub\Contract\Codespace\RuntimeConstraints;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T2CC7E7E7 implements RuntimeConstraints
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "allowed_port_privacy_settings": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "The privacy settings a user can select from when forwarding a port."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    /**
     * allowedPortPrivacySettings: The privacy settings a user can select from when forwarding a port.
     */
    public function __construct(#[MapFrom('allowed_port_privacy_settings')]
    public array|null $allowedPortPrivacySettings,)
    {
    }
}
