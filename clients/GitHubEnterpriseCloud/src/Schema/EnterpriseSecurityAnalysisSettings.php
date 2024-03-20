<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseSecurityAnalysisSettings
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise Security Analysis Settings",
    "required": [
        "advanced_security_enabled_for_new_repositories",
        "dependabot_alerts_enabled_for_new_repositories",
        "secret_scanning_enabled_for_new_repositories",
        "secret_scanning_push_protection_enabled_for_new_repositories"
    ],
    "type": "object",
    "properties": {
        "advanced_security_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to\\nthis enterprise.",
            "examples": [
                false
            ]
        },
        "advanced_security_enabled_for_new_user_namespace_repositories": {
            "type": "boolean",
            "description": "Whether GitHub Advanced Security is automatically enabled for new user namespace repositories.",
            "examples": [
                false
            ]
        },
        "dependabot_alerts_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this\\nenterprise.",
            "examples": [
                false
            ]
        },
        "secret_scanning_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "Whether secret scanning is automatically enabled for new repositories and repositories transferred to this\\nenterprise.",
            "examples": [
                false
            ]
        },
        "secret_scanning_push_protection_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "Whether secret scanning push protection is automatically enabled for new repositories and repositories\\ntransferred to this enterprise.",
            "examples": [
                false
            ]
        },
        "secret_scanning_push_protection_custom_link": {
            "type": [
                "string",
                "null"
            ],
            "description": "An optional URL string to display to contributors who are blocked from pushing a secret.",
            "examples": [
                "https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"
            ]
        },
        "secret_scanning_validity_checks_enabled": {
            "type": "boolean",
            "description": "Whether secret scanning automatic validity checks on supported partner tokens is enabled for all repositories under this enterprise.",
            "examples": [
                false
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = 'Enterprise Security Analysis Settings';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "advanced_security_enabled_for_new_repositories": false,
    "advanced_security_enabled_for_new_user_namespace_repositories": false,
    "dependabot_alerts_enabled_for_new_repositories": false,
    "secret_scanning_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_custom_link": "https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md",
    "secret_scanning_validity_checks_enabled": false
}';

    /**
     * advancedSecurityEnabledForNewRepositories: Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to
    this enterprise.
     * advancedSecurityEnabledForNewUserNamespaceRepositories: Whether GitHub Advanced Security is automatically enabled for new user namespace repositories.
     * dependabotAlertsEnabledForNewRepositories: Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this
    enterprise.
     * secretScanningEnabledForNewRepositories: Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    enterprise.
     * secretScanningPushProtectionEnabledForNewRepositories: Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this enterprise.
     * secretScanningPushProtectionCustomLink: An optional URL string to display to contributors who are blocked from pushing a secret.
     * secretScanningValidityChecksEnabled: Whether secret scanning automatic validity checks on supported partner tokens is enabled for all repositories under this enterprise.
     */
    public function __construct(#[MapFrom('advanced_security_enabled_for_new_repositories')]
    public bool $advancedSecurityEnabledForNewRepositories, #[MapFrom('advanced_security_enabled_for_new_user_namespace_repositories')]
    public bool|null $advancedSecurityEnabledForNewUserNamespaceRepositories, #[MapFrom('dependabot_alerts_enabled_for_new_repositories')]
    public bool $dependabotAlertsEnabledForNewRepositories, #[MapFrom('secret_scanning_enabled_for_new_repositories')]
    public bool $secretScanningEnabledForNewRepositories, #[MapFrom('secret_scanning_push_protection_enabled_for_new_repositories')]
    public bool $secretScanningPushProtectionEnabledForNewRepositories, #[MapFrom('secret_scanning_push_protection_custom_link')]
    public string|null $secretScanningPushProtectionCustomLink, #[MapFrom('secret_scanning_validity_checks_enabled')]
    public bool|null $secretScanningValidityChecksEnabled,)
    {
    }
}
