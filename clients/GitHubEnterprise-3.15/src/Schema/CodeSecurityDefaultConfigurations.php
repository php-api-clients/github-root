<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeSecurityDefaultConfigurations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "default_for_new_repos": {
            "enum": [
                "public",
                "private_and_internal",
                "all"
            ],
            "description": "The visibility of newly created repositories for which the code security configuration will be applied to by default"
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
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "default_for_new_repos": "public",
    "configuration": {
        "id": 2,
        "name": "generated",
        "target_type": "global",
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
        "enforcement": "enforced",
        "url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00"
    }
}';

    /**
     * defaultForNewRepos: The visibility of newly created repositories for which the code security configuration will be applied to by default
     * configuration: A code security configuration
     */
    public function __construct(#[MapFrom('default_for_new_repos')]
    public string $defaultForNewRepos, public Schema\CodeSecurityConfiguration|null $configuration,)
    {
    }
}
