<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

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
    * Whether GitHub advanced security is automatically enabled for new repositories and repositories transferred to
    this enterprise.
    */
    public ?bool $advanced_security_enabled_for_new_repositories;
    /**
    * Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this
    enterprise.
    */
    public ?bool $dependabot_alerts_enabled_for_new_repositories;
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    enterprise.
    */
    public ?bool $secret_scanning_enabled_for_new_repositories;
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this enterprise.
    */
    public ?bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    public ?string $secret_scanning_push_protection_custom_link;
    public function __construct(bool $advanced_security_enabled_for_new_repositories, bool $dependabot_alerts_enabled_for_new_repositories, bool $secret_scanning_enabled_for_new_repositories, bool $secret_scanning_push_protection_enabled_for_new_repositories, string $secret_scanning_push_protection_custom_link)
    {
        $this->advanced_security_enabled_for_new_repositories = $advanced_security_enabled_for_new_repositories;
        $this->dependabot_alerts_enabled_for_new_repositories = $dependabot_alerts_enabled_for_new_repositories;
        $this->secret_scanning_enabled_for_new_repositories = $secret_scanning_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_enabled_for_new_repositories = $secret_scanning_push_protection_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_custom_link = $secret_scanning_push_protection_custom_link;
    }
}
