<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;

/**
 * @property string $url
 * @property ?StatusCheckPolicy $requiredStatusChecks
 * @property ?RequiredPullRequestReviews $requiredPullRequestReviews
 * @property ?RequiredSignatures $requiredSignatures
 * @property ?EnforceAdmins $enforceAdmins
 * @property ?RequiredLinearHistory $requiredLinearHistory
 * @property ?AllowForcePushes $allowForcePushes
 * @property ?AllowDeletions $allowDeletions
 * @property ?BranchRestrictionPolicy $restrictions
 * @property ?RequiredConversationResolution $requiredConversationResolution
 * @property ?BlockCreations $blockCreations
 * @property ?LockBranch $lockBranch
 * @property ?AllowForkSyncing $allowForkSyncing
 */
interface ProtectedBranch
{
}
