<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories. For more information, see \\"[About GitHub Advanced Security](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/get-started\\/learning-about-github\\/about-github-advanced-security).\\""},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts are automatically enabled for new repositories. For more information, see \\"[About Dependabot alerts](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/code-security\\/dependabot\\/dependabot-alerts\\/about-dependabot-alerts).\\""},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories. For more information, see \\"[About secret scanning](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/code-security\\/secret-scanning\\/about-secret-scanning).\\""},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories. For more information, see \\"[Protecting pushes with secret scanning](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"The URL that will be displayed to contributors who are blocked from pushing a secret. For more information, see \\"[Protecting pushes with secret scanning](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\"\\nTo disable this functionality, set this field to `null`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"advanced_security_enabled_for_new_repositories":false,"dependabot_alerts_enabled_for_new_repositories":false,"secret_scanning_enabled_for_new_repositories":false,"secret_scanning_push_protection_enabled_for_new_repositories":false,"secret_scanning_push_protection_custom_link":"generated_secret_scanning_push_protection_custom_link"}';
    /**
     * Whether GitHub Advanced Security is automatically enabled for new repositories. For more information, see "[About GitHub Advanced Security](https://docs.github.com/enterprise-cloud@latest//get-started/learning-about-github/about-github-advanced-security)."
     */
    public ?bool $advanced_security_enabled_for_new_repositories;
    /**
     * Whether Dependabot alerts are automatically enabled for new repositories. For more information, see "[About Dependabot alerts](https://docs.github.com/enterprise-cloud@latest//code-security/dependabot/dependabot-alerts/about-dependabot-alerts)."
     */
    public ?bool $dependabot_alerts_enabled_for_new_repositories;
    /**
     * Whether secret scanning is automatically enabled for new repositories. For more information, see "[About secret scanning](https://docs.github.com/enterprise-cloud@latest//code-security/secret-scanning/about-secret-scanning)."
     */
    public ?bool $secret_scanning_enabled_for_new_repositories;
    /**
     * Whether secret scanning push protection is automatically enabled for new repositories. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/enterprise-cloud@latest//code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     */
    public ?bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
    * The URL that will be displayed to contributors who are blocked from pushing a secret. For more information, see "[Protecting pushes with secret scanning](https://docs.github.com/enterprise-cloud@latest//code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
    To disable this functionality, set this field to `null`.
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
