<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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
        },
        "secret_scanning_validity_checks": {
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
    "dependabot_security_updates": {
        "status": "disabled"
    },
    "secret_scanning": {
        "status": "disabled"
    },
    "secret_scanning_push_protection": {
        "status": "disabled"
    },
    "secret_scanning_non_provider_patterns": {
        "status": "disabled"
    },
    "secret_scanning_ai_detection": {
        "status": "disabled"
    },
    "secret_scanning_validity_checks": {
        "status": "disabled"
    }
}';

    /**
     * dependabotSecurityUpdates: Enable or disable Dependabot security updates for the repository.
     */
    public function __construct(#[MapFrom('advanced_security')]
    public Schema\SecurityAndAnalysis\AdvancedSecurity|null $advancedSecurity, #[MapFrom('dependabot_security_updates')]
    public Schema\SecurityAndAnalysis\DependabotSecurityUpdates|null $dependabotSecurityUpdates, #[MapFrom('secret_scanning')]
    public Schema\SecurityAndAnalysis\SecretScanning|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public Schema\SecurityAndAnalysis\SecretScanningPushProtection|null $secretScanningPushProtection, #[MapFrom('secret_scanning_non_provider_patterns')]
    public Schema\SecurityAndAnalysis\SecretScanningNonProviderPatterns|null $secretScanningNonProviderPatterns, #[MapFrom('secret_scanning_ai_detection')]
    public Schema\SecurityAndAnalysis\SecretScanningAiDetection|null $secretScanningAiDetection, #[MapFrom('secret_scanning_validity_checks')]
    public Schema\SecurityAndAnalysis\SecretScanningValidityChecks|null $secretScanningValidityChecks,)
    {
    }
}
