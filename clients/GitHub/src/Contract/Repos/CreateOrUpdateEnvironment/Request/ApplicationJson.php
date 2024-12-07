<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateOrUpdateEnvironment\Request;

use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicySettings;

/**
 * @property ?int $waitTimer
 * @property ?bool $preventSelfReview
 * @property ?array $reviewers
 * @property ?DeploymentBranchPolicySettings $deploymentBranchPolicy
 */
interface ApplicationJson
{
}
