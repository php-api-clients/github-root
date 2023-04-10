<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class EnterpriseSecurityAnalysisSettings
{
    public const SCHEMA_JSON = '{"title":"Enterprise Security Analysis Settings","required":["advanced_security_enabled_for_new_repositories","dependabot_alerts_enabled_for_new_repositories","secret_scanning_enabled_for_new_repositories","secret_scanning_push_protection_enabled_for_new_repositories"],"type":"object","properties":{"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to\\nthis enterprise.","examples":[false]},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this\\nenterprise.","examples":[false]},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories and repositories transferred to this\\nenterprise.","examples":[false]},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories and repositories\\ntransferred to this enterprise.","examples":[false]},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"An optional URL string to display to contributors who are blocked from pushing a secret.","examples":["https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"]}}}';
    public const SCHEMA_TITLE = 'Enterprise Security Analysis Settings';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"advanced_security_enabled_for_new_repositories":false,"dependabot_alerts_enabled_for_new_repositories":false,"secret_scanning_enabled_for_new_repositories":false,"secret_scanning_push_protection_enabled_for_new_repositories":false,"secret_scanning_push_protection_custom_link":"https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"}';
    /**
    * advancedSecurityEnabledForNewRepositories: Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to
    this enterprise.
    * dependabotAlertsEnabledForNewRepositories: Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this
    enterprise.
    * secretScanningEnabledForNewRepositories: Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    enterprise.
    * secretScanningPushProtectionEnabledForNewRepositories: Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this enterprise.
    * secretScanningPushProtectionCustomLink: An optional URL string to display to contributors who are blocked from pushing a secret.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('advanced_security_enabled_for_new_repositories')] public bool $advancedSecurityEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_alerts_enabled_for_new_repositories')] public bool $dependabotAlertsEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_enabled_for_new_repositories')] public bool $secretScanningEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_enabled_for_new_repositories')] public bool $secretScanningPushProtectionEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_custom_link')] public ?string $secretScanningPushProtectionCustomLink)
    {
    }
}
