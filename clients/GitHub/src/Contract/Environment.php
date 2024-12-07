<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $url
 * @property string $htmlUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?array<\ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Zero|\ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\One|\ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Two> $protectionRules
 * @property ?\ApiClients\Client\GitHub\Schema\DeploymentBranchPolicySettings $deploymentBranchPolicy
 */
interface Environment
{
}
