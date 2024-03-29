<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "advanced_security": {
            "type": "object",
            "properties": {
                "status": {
                    "enum": [
                        "enabled",
                        "disabled"
                    ],
                    "type": "string"
                }
            }
        },
        "secret_scanning": {
            "type": "object",
            "properties": {
                "status": {
                    "enum": [
                        "enabled",
                        "disabled"
                    ],
                    "type": "string"
                }
            }
        },
        "secret_scanning_push_protection": {
            "type": "object",
            "properties": {
                "status": {
                    "enum": [
                        "enabled",
                        "disabled"
                    ],
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "advanced_security": {
        "status": "disabled"
    },
    "secret_scanning": {
        "status": "disabled"
    },
    "secret_scanning_push_protection": {
        "status": "disabled"
    }
}';

    public function __construct(#[MapFrom('advanced_security')]
    public Schema\SecurityAndAnalysis\AdvancedSecurity|null $advancedSecurity, #[MapFrom('secret_scanning')]
    public Schema\SecurityAndAnalysis\SecretScanning|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public Schema\SecurityAndAnalysis\SecretScanningPushProtection|null $secretScanningPushProtection,)
    {
    }
}
