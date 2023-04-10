<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class EnterpriseSecurityAnalysisSettings
{
    public const SCHEMA_JSON = '{"title":"Enterprise Security Analysis Settings","required":["advanced_security_enabled_for_new_repositories","secret_scanning_enabled_for_new_repositories","secret_scanning_push_protection_enabled_for_new_repositories"],"type":"object","properties":{"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this\\nenterprise.","examples":[false]}}}';
    public const SCHEMA_TITLE = 'Enterprise Security Analysis Settings';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"dependabot_alerts_enabled_for_new_repositories":false}';
    /**
    * dependabotAlertsEnabledForNewRepositories: Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this
    enterprise.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('dependabot_alerts_enabled_for_new_repositories')] public ?bool $dependabotAlertsEnabledForNewRepositories)
    {
    }
}
