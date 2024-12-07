<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $url
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions $dismissalRestrictions
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances $bypassPullRequestAllowances
 * @property bool $dismissStaleReviews
 * @property bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 */
interface ProtectedBranchPullRequestReview
{
}
