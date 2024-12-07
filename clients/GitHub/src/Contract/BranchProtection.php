<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $url
 * @property ?bool $enabled
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck $requiredStatusChecks
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced $enforceAdmins
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview $requiredPullRequestReviews
 * @property ?\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy $restrictions
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredLinearHistory $requiredLinearHistory
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\AllowForcePushes $allowForcePushes
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\AllowDeletions $allowDeletions
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\BlockCreations $blockCreations
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredConversationResolution $requiredConversationResolution
 * @property ?string $name
 * @property ?string $protectionUrl
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\RequiredSignatures $requiredSignatures
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch $lockBranch
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection\AllowForkSyncing $allowForkSyncing
 */
interface BranchProtection
{
}
