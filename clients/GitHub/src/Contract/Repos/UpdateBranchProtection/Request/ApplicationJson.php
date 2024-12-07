<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\UpdateBranchProtection\Request;

use ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews;
use ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks;
use ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\Restrictions;

/**
 * @property ?RequiredStatusChecks $requiredStatusChecks
 * @property ?bool $enforceAdmins
 * @property ?RequiredPullRequestReviews $requiredPullRequestReviews
 * @property ?Restrictions $restrictions
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
