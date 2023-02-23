<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts are automatically enabled for new repositories. For more information, see \\"[About Dependabot alerts](https:\\/\\/docs.github.com\\/enterprise-server@3.8\\/code-security\\/dependabot\\/dependabot-alerts\\/about-dependabot-alerts).\\""}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"dependabot_alerts_enabled_for_new_repositories":false}';
    /**
     * Whether Dependabot alerts are automatically enabled for new repositories. For more information, see "[About Dependabot alerts](https://docs.github.com/enterprise-server@3.8/code-security/dependabot/dependabot-alerts/about-dependabot-alerts)."
     */
    public ?bool $dependabot_alerts_enabled_for_new_repositories;
    public function __construct(bool $dependabot_alerts_enabled_for_new_repositories)
    {
        $this->dependabot_alerts_enabled_for_new_repositories = $dependabot_alerts_enabled_for_new_repositories;
    }
}
