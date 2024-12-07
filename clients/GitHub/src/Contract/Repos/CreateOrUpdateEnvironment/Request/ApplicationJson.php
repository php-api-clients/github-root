<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\CreateOrUpdateEnvironment\Request;

/**
 * @property ?int $waitTimer
 * @property ?bool $preventSelfReview
 * @property ?array $reviewers
 * @property ?\ApiClients\Client\GitHub\Schema\DeploymentBranchPolicySettings $deploymentBranchPolicy
 */
interface ApplicationJson
{
}
