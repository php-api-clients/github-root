<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseSecurityProductsOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise Security Products Stats",
    "type": "object",
    "properties": {
        "total_repos": {
            "type": "integer"
        },
        "nonarchived_repos": {
            "type": "integer"
        },
        "secret_scanning_enabled_repos": {
            "type": "integer"
        },
        "secret_scanning_push_protection_enabled_repos": {
            "type": "integer"
        },
        "code_scanning_enabled_repos": {
            "type": "integer"
        },
        "code_scanning_pr_reviews_enabled_repos": {
            "type": "integer"
        },
        "code_scanning_default_setup_enabled_repos": {
            "type": "integer"
        },
        "code_scanning_default_setup_eligible_repos": {
            "type": "integer"
        },
        "dependabot_alerts_enabled_repos": {
            "type": "integer"
        },
        "dependabot_security_updates_enabled_repos": {
            "type": "integer"
        },
        "dependabot_version_updates_enabled_repos": {
            "type": "integer"
        },
        "advanced_security_enabled_repos": {
            "type": "integer"
        },
        "active_committers": {
            "type": "integer"
        },
        "purchased_committers": {
            "type": "integer"
        },
        "maximum_committers": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Enterprise Security Products Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_repos": 11,
    "nonarchived_repos": 17,
    "secret_scanning_enabled_repos": 29,
    "secret_scanning_push_protection_enabled_repos": 45,
    "code_scanning_enabled_repos": 27,
    "code_scanning_pr_reviews_enabled_repos": 38,
    "code_scanning_default_setup_enabled_repos": 41,
    "code_scanning_default_setup_eligible_repos": 42,
    "dependabot_alerts_enabled_repos": 31,
    "dependabot_security_updates_enabled_repos": 41,
    "dependabot_version_updates_enabled_repos": 40,
    "advanced_security_enabled_repos": 31,
    "active_committers": 17,
    "purchased_committers": 20,
    "maximum_committers": 18
}';

    public function __construct(#[MapFrom('total_repos')]
    public int|null $totalRepos, #[MapFrom('nonarchived_repos')]
    public int|null $nonarchivedRepos, #[MapFrom('secret_scanning_enabled_repos')]
    public int|null $secretScanningEnabledRepos, #[MapFrom('secret_scanning_push_protection_enabled_repos')]
    public int|null $secretScanningPushProtectionEnabledRepos, #[MapFrom('code_scanning_enabled_repos')]
    public int|null $codeScanningEnabledRepos, #[MapFrom('code_scanning_pr_reviews_enabled_repos')]
    public int|null $codeScanningPrReviewsEnabledRepos, #[MapFrom('code_scanning_default_setup_enabled_repos')]
    public int|null $codeScanningDefaultSetupEnabledRepos, #[MapFrom('code_scanning_default_setup_eligible_repos')]
    public int|null $codeScanningDefaultSetupEligibleRepos, #[MapFrom('dependabot_alerts_enabled_repos')]
    public int|null $dependabotAlertsEnabledRepos, #[MapFrom('dependabot_security_updates_enabled_repos')]
    public int|null $dependabotSecurityUpdatesEnabledRepos, #[MapFrom('dependabot_version_updates_enabled_repos')]
    public int|null $dependabotVersionUpdatesEnabledRepos, #[MapFrom('advanced_security_enabled_repos')]
    public int|null $advancedSecurityEnabledRepos, #[MapFrom('active_committers')]
    public int|null $activeCommitters, #[MapFrom('purchased_committers')]
    public int|null $purchasedCommitters, #[MapFrom('maximum_committers')]
    public int|null $maximumCommitters,)
    {
    }
}
