<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class CodeSecurityConfigurationForRepository
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "attached",
                "attaching",
                "detached",
                "removed",
                "enforced",
                "failed",
                "updating",
                "removed_by_enterprise"
            ],
            "type": "string",
            "description": "The attachment status of the code security configuration on the repository."
        },
        "configuration": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "The ID of the code security configuration"
                },
                "name": {
                    "type": "string",
                    "description": "The name of the code security configuration. Must be unique within the organization."
                },
                "target_type": {
                    "enum": [
                        "global",
                        "organization",
                        "enterprise"
                    ],
                    "type": "string",
                    "description": "The type of the code security configuration."
                },
                "description": {
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
                    "description": "The enablement status of Dependency Graph"
                },
                "dependency_graph_autosubmit_action": {
                    "enum": [
                        "enabled",
                        "disabled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "The enablement status of Automatic dependency submission"
                },
                "dependency_graph_autosubmit_action_options": {
                    "type": "object",
                    "properties": {
                        "labeled_runners": {
                            "type": "boolean",
                            "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners."
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
                                "not_set",
                                null
                            ],
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "Whether to use labeled runners or standard GitHub runners."
                        },
                        "runner_label": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The label of the runner to use for code scanning when runner_type is \'labeled\'."
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
                    "description": "The enablement status of code scanning delegated alert dismissal"
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
                "secret_scanning_generic_secrets": {
                    "enum": [
                        "enabled",
                        "disabled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "The enablement status of Copilot secret scanning"
                },
                "secret_scanning_delegated_alert_dismissal": {
                    "enum": [
                        "enabled",
                        "disabled",
                        "not_set"
                    ],
                    "type": "string",
                    "description": "The enablement status of secret scanning delegated alert dismissal"
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
                },
                "url": {
                    "type": "string",
                    "description": "The URL of the configuration",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "description": "The URL of the configuration",
                    "format": "uri"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                }
            },
            "description": "A code security configuration"
        }
    },
    "description": "Code security configuration associated with a repository and attachment status"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Code security configuration associated with a repository and attachment status';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "removed_by_enterprise",
    "configuration": {
        "id": 2,
        "name": "generated",
        "target_type": "global",
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
        "secret_scanning_generic_secrets": "enabled",
        "secret_scanning_delegated_alert_dismissal": "enabled",
        "private_vulnerability_reporting": "enabled",
        "enforcement": "enforced",
        "url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00"
    }
}';

    /**
     * status: The attachment status of the code security configuration on the repository.
     * configuration: A code security configuration
     */
    public function __construct(public string|null $status, public Schema\CodeSecurityConfiguration|null $configuration)
    {
    }
}
