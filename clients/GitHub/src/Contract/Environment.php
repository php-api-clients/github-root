<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicySettings;
use ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\One;
use ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Two;
use ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Zero;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $url
 * @property string $htmlUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?array<Zero|One|Two> $protectionRules
 * @property ?DeploymentBranchPolicySettings $deploymentBranchPolicy
 */
interface Environment
{
}
