<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeSecurity\CreateConfigurationForEnterprise\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "description"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the code security configuration. Must be unique within the enterprise."
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
            "description": "The enablement status of GitHub Advanced Security",
            "default": "disabled"
        },
        "dependency_graph": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependency Graph",
            "default": "enabled"
        },
        "dependency_graph_autosubmit_action": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Automatic dependency submission",
            "default": "disabled"
        },
        "dependency_graph_autosubmit_action_options": {
            "type": "object",
            "properties": {
                "labeled_runners": {
                    "type": "boolean",
                    "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners.",
                    "default": false
                }
            },
            "description": "Feature options for Automatic dependency submission"
        },
        "dependabot_alerts": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot alerts",
            "default": "disabled"
        },
        "dependabot_security_updates": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Dependabot security updates",
            "default": "disabled"
        },
        "code_scanning_default_setup": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of code scanning default setup",
            "default": "disabled"
        },
        "code_scanning_default_setup_options": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "runner_type": {
                    "enum": [
                        "standard",
                        "labeled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "Whether to use labeled runners or standard GitHub runners."
                },
                "runner_label": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The label of the runner to use for code scanning default setup when runner_type is \'labeled\'."
                }
            },
            "description": "Feature options for code scanning default setup"
        },
        "code_scanning_delegated_alert_dismissal": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of code scanning delegated alert dismissal",
            "default": "disabled"
        },
        "secret_scanning": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning",
            "default": "disabled"
        },
        "secret_scanning_push_protection": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning push protection",
            "default": "disabled"
        },
        "secret_scanning_validity_checks": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning validity checks",
            "default": "disabled"
        },
        "secret_scanning_non_provider_patterns": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning non provider patterns",
            "default": "disabled"
        },
        "secret_scanning_generic_secrets": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of Copilot secret scanning",
            "default": "disabled"
        },
        "secret_scanning_delegated_alert_dismissal": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of secret scanning delegated alert dismissal",
            "default": "disabled"
        },
        "private_vulnerability_reporting": {
            "enum": [
                "enabled",
                "disabled",
                "not_set"
            ],
            "type": "string",
            "description": "The enablement status of private vulnerability reporting",
            "default": "disabled"
        },
        "enforcement": {
            "enum": [
                "enforced",
                "unenforced"
            ],
            "type": "string",
            "description": "The enforcement status for a security configuration",
            "default": "enforced"
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
    "dependency_graph_autosubmit_action": "not_set",
    "dependency_graph_autosubmit_action_options": {
        "labeled_runners": false
    },
    "dependabot_alerts": "enabled",
    "dependabot_security_updates": "enabled",
    "code_scanning_default_setup": "enabled",
    "code_scanning_default_setup_options": {
        "runner_type": "standard",
        "runner_label": "generated"
    },
    "code_scanning_delegated_alert_dismissal": "enabled",
    "secret_scanning": "enabled",
    "secret_scanning_push_protection": "enabled",
    "secret_scanning_validity_checks": "enabled",
    "secret_scanning_non_provider_patterns": "enabled",
    "secret_scanning_generic_secrets": "enabled",
    "secret_scanning_delegated_alert_dismissal": "enabled",
    "private_vulnerability_reporting": "enabled",
    "enforcement": "enforced"
}';

    /**
     * name: The name of the code security configuration. Must be unique within the enterprise.
     * description: A description of the code security configuration
     * advancedSecurity: The enablement status of GitHub Advanced Security
     * dependencyGraph: The enablement status of Dependency Graph
     * dependencyGraphAutosubmitAction: The enablement status of Automatic dependency submission
     * dependencyGraphAutosubmitActionOptions: Feature options for Automatic dependency submission
     * dependabotAlerts: The enablement status of Dependabot alerts
     * dependabotSecurityUpdates: The enablement status of Dependabot security updates
     * codeScanningDefaultSetup: The enablement status of code scanning default setup
     * codeScanningDefaultSetupOptions: Feature options for code scanning default setup
     * codeScanningDelegatedAlertDismissal: The enablement status of code scanning delegated alert dismissal
     * secretScanning: The enablement status of secret scanning
     * secretScanningPushProtection: The enablement status of secret scanning push protection
     * secretScanningValidityChecks: The enablement status of secret scanning validity checks
     * secretScanningNonProviderPatterns: The enablement status of secret scanning non provider patterns
     * secretScanningGenericSecrets: The enablement status of Copilot secret scanning
     * secretScanningDelegatedAlertDismissal: The enablement status of secret scanning delegated alert dismissal
     * privateVulnerabilityReporting: The enablement status of private vulnerability reporting
     * enforcement: The enforcement status for a security configuration
     */
    public function __construct(public string $name, public string $description, #[MapFrom('advanced_security')]
    public string|null $advancedSecurity, #[MapFrom('dependency_graph')]
    public string|null $dependencyGraph, #[MapFrom('dependency_graph_autosubmit_action')]
    public string|null $dependencyGraphAutosubmitAction, #[MapFrom('dependency_graph_autosubmit_action_options')]
    public Schema\CodeSecurity\CreateConfigurationForEnterprise\Request\ApplicationJson\DependencyGraphAutosubmitActionOptions|null $dependencyGraphAutosubmitActionOptions, #[MapFrom('dependabot_alerts')]
    public string|null $dependabotAlerts, #[MapFrom('dependabot_security_updates')]
    public string|null $dependabotSecurityUpdates, #[MapFrom('code_scanning_default_setup')]
    public string|null $codeScanningDefaultSetup, #[MapFrom('code_scanning_default_setup_options')]
    public Schema\CodeScanningDefaultSetupOptions|null $codeScanningDefaultSetupOptions, #[MapFrom('code_scanning_delegated_alert_dismissal')]
    public string|null $codeScanningDelegatedAlertDismissal, #[MapFrom('secret_scanning')]
    public string|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public string|null $secretScanningPushProtection, #[MapFrom('secret_scanning_validity_checks')]
    public string|null $secretScanningValidityChecks, #[MapFrom('secret_scanning_non_provider_patterns')]
    public string|null $secretScanningNonProviderPatterns, #[MapFrom('secret_scanning_generic_secrets')]
    public string|null $secretScanningGenericSecrets, #[MapFrom('secret_scanning_delegated_alert_dismissal')]
    public string|null $secretScanningDelegatedAlertDismissal, #[MapFrom('private_vulnerability_reporting')]
    public string|null $privateVulnerabilityReporting, public string|null $enforcement,)
    {
    }
}
