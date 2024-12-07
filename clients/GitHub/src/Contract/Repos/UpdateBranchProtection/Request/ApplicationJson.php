<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\UpdateBranchProtection\Request;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks $requiredStatusChecks
 * @property ?bool $enforceAdmins
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews $requiredPullRequestReviews
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\Restrictions $restrictions
 * @property ?bool $requiredLinearHistory
 * @property ?bool $allowForcePushes
 * @property ?bool $allowDeletions
 * @property ?bool $blockCreations
 * @property ?bool $requiredConversationResolution
 * @property ?bool $lockBranch
 * @property ?bool $allowForkSyncing
 */
interface ApplicationJson
{
}
