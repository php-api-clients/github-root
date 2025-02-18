<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\CodeSecurity\UpdateConfiguration\Request;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the code security configuration. Must be unique within the organization."
        },
        "description": {
            "maxLength": 255,
            "type": "string",
            "description": "A description of the code security configuration"
        },
        "advanced_security": {
            "enum": [
                "enabled",
                "disabled"
            ],
            "type": "string",
            "description": "The enablement status of GitHub Advanced Security"
        },
        "dependency_graph": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependency Graph. Dependency Graph is not configurable in GitHub Enterprise Server."
        },
        "dependabot_alerts": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot alerts"
        },
        "dependabot_security_updates": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot security updates"
        },
        "code_scanning_default_setup": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of code scanning default setup"
        },
        "secret_scanning": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning"
        },
        "secret_scanning_push_protection": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning push protection"
        },
        "secret_scanning_delegated_bypass": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning delegated bypass"
        },
        "secret_scanning_delegated_bypass_options": {
            "type": "object",
            "properties": {
                "reviewers": {
                    "type": "array",
                    "items": {
                        "required": [
                            "reviewer_id",
                            "reviewer_type"
                        ],
                        "type": "object",
                        "properties": {
                            "reviewer_id": {
                                "type": "integer",
                                "description": "The ID of the team or role selected as a bypass reviewer"
                            },
                            "reviewer_type": {
                                "enum": [
                                    "TEAM",
                                    "ROLE"
                                ],
                                "type": "string",
                                "description": "The type of the bypass reviewer"
                            }
                        }
                    },
                    "description": "The bypass reviewers for secret scanning delegated bypass"
                }
            },
            "description": "Feature options for secret scanning delegated bypass"
        },
        "secret_scanning_validity_checks": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning validity checks"
        },
        "secret_scanning_non_provider_patterns": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning non-provider patterns"
        },
        "private_vulnerability_reporting": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of private vulnerability reporting"
        },
        "enforcement": {
            "enum": [
                "enforced",
                "unenforced"
            ],
            "type": "string",
            "description": "The enforcement status for a security configuration"
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "advanced_security": "enabled",
    "dependency_graph": "not_set",
    "dependabot_alerts": "enabled",
    "dependabot_security_updates": "enabled",
    "code_scanning_default_setup": "enabled",
    "secret_scanning": "enabled",
    "secret_scanning_push_protection": "enabled",
    "secret_scanning_delegated_bypass": "not_set",
    "secret_scanning_delegated_bypass_options": {
        "reviewers": [
            {
                "reviewer_id": 11,
                "reviewer_type": "TEAM"
            },
            {
                "reviewer_id": 11,
                "reviewer_type": "TEAM"
            }
        ]
    },
    "secret_scanning_validity_checks": "enabled",
    "secret_scanning_non_provider_patterns": "enabled",
    "private_vulnerability_reporting": "enabled",
    "enforcement": "enforced"
}';

    /**
     * name: The name of the code security configuration. Must be unique within the organization.
     * description: A description of the code security configuration
     * advancedSecurity: The enablement status of GitHub Advanced Security
     * dependencyGraph: The enablement status of Dependency Graph. Dependency Graph is not configurable in GitHub Enterprise Server.
     * dependabotAlerts: The enablement status of Dependabot alerts
     * dependabotSecurityUpdates: The enablement status of Dependabot security updates
     * codeScanningDefaultSetup: The enablement status of code scanning default setup
     * secretScanning: The enablement status of secret scanning
     * secretScanningPushProtection: The enablement status of secret scanning push protection
     * secretScanningDelegatedBypass: The enablement status of secret scanning delegated bypass
     * secretScanningDelegatedBypassOptions: Feature options for secret scanning delegated bypass
     * secretScanningValidityChecks: The enablement status of secret scanning validity checks
     * secretScanningNonProviderPatterns: The enablement status of secret scanning non-provider patterns
     * privateVulnerabilityReporting: The enablement status of private vulnerability reporting
     * enforcement: The enforcement status for a security configuration
     */
    public function __construct(public string|null $name, public string|null $description, #[MapFrom('advanced_security')]
    public string|null $advancedSecurity, #[MapFrom('dependency_graph')]
    public string|null $dependencyGraph, #[MapFrom('dependabot_alerts')]
    public string|null $dependabotAlerts, #[MapFrom('dependabot_security_updates')]
    public string|null $dependabotSecurityUpdates, #[MapFrom('code_scanning_default_setup')]
    public string|null $codeScanningDefaultSetup, #[MapFrom('secret_scanning')]
    public string|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public string|null $secretScanningPushProtection, #[MapFrom('secret_scanning_delegated_bypass')]
    public string|null $secretScanningDelegatedBypass, #[MapFrom('secret_scanning_delegated_bypass_options')]
    public Schema\CodeSecurity\UpdateConfiguration\Request\ApplicationJson\SecretScanningDelegatedBypassOptions|null $secretScanningDelegatedBypassOptions, #[MapFrom('secret_scanning_validity_checks')]
    public string|null $secretScanningValidityChecks, #[MapFrom('secret_scanning_non_provider_patterns')]
    public string|null $secretScanningNonProviderPatterns, #[MapFrom('private_vulnerability_reporting')]
    public string|null $privateVulnerabilityReporting, public string|null $enforcement,)
    {
    }
}
