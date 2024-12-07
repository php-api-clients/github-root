<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\DependabotSecurityUpdates;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanning;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningAiDetection;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningNonProviderPatterns;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningPushProtection;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecurityAndAnalysis implements \ApiClients\Client\GitHub\Contract\SecurityAndAnalysis
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
        "dependabot_security_updates": {
            "type": "object",
            "properties": {
                "status": {
                    "enum": [
                        "enabled",
                        "disabled"
                    ],
                    "type": "string",
                    "description": "The enablement status of Dependabot security updates for the repository."
                }
            },
            "description": "Enable or disable Dependabot security updates for the repository."
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
        },
        "secret_scanning_non_provider_patterns": {
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
        "secret_scanning_ai_detection": {
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
        "status": "enabled"
    },
    "dependabot_security_updates": {
        "status": "enabled"
    },
    "secret_scanning": {
        "status": "enabled"
    },
    "secret_scanning_push_protection": {
        "status": "enabled"
    },
    "secret_scanning_non_provider_patterns": {
        "status": "enabled"
    },
    "secret_scanning_ai_detection": {
        "status": "enabled"
    }
}';

    /**
     * dependabotSecurityUpdates: Enable or disable Dependabot security updates for the repository.
     */
    public function __construct(#[MapFrom('advanced_security')]
    public AdvancedSecurity|null $advancedSecurity, #[MapFrom('dependabot_security_updates')]
    public DependabotSecurityUpdates|null $dependabotSecurityUpdates, #[MapFrom('secret_scanning')]
    public SecretScanning|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public SecretScanningPushProtection|null $secretScanningPushProtection, #[MapFrom('secret_scanning_non_provider_patterns')]
    public SecretScanningNonProviderPatterns|null $secretScanningNonProviderPatterns, #[MapFrom('secret_scanning_ai_detection')]
    public SecretScanningAiDetection|null $secretScanningAiDetection,)
    {
    }
}
