<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CustomDeploymentRuleApp;

/**
 * @property int $id
 * @property string $nodeId
 * @property bool $enabled
 * @property CustomDeploymentRuleApp $app
 */
interface DeploymentProtectionRule
{
}
