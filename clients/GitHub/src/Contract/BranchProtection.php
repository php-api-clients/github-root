<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions;
use ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes;
use ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing;
use ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations;
use ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory;
use ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck;

/**
 * @property ?string $url
 * @property ?bool $enabled
 * @property ?ProtectedBranchRequiredStatusCheck $requiredStatusChecks
 * @property ?ProtectedBranchAdminEnforced $enforceAdmins
 * @property ?ProtectedBranchPullRequestReview $requiredPullRequestReviews
 * @property ?BranchRestrictionPolicy $restrictions
 * @property ?RequiredLinearHistory $requiredLinearHistory
 * @property ?AllowForcePushes $allowForcePushes
 * @property ?AllowDeletions $allowDeletions
 * @property ?BlockCreations $blockCreations
 * @property ?RequiredConversationResolution $requiredConversationResolution
 * @property ?string $name
 * @property ?string $protectionUrl
 * @property ?RequiredSignatures $requiredSignatures
 * @property ?LockBranch $lockBranch
 * @property ?AllowForkSyncing $allowForkSyncing
 */
interface BranchProtection
{
}
