<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\StatusCheckPolicy $requiredStatusChecks
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews $requiredPullRequestReviews
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredSignatures $requiredSignatures
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins $enforceAdmins
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredLinearHistory $requiredLinearHistory
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForcePushes $allowForcePushes
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowDeletions $allowDeletions
 * @property ?\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy $restrictions
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution $requiredConversationResolution
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\BlockCreations $blockCreations
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\LockBranch $lockBranch
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\AllowForkSyncing $allowForkSyncing
 */
interface ProtectedBranch
{
}
