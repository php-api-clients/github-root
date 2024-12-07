<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\UpdateBranchProtection\Request\ApplicationJson;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\DismissalRestrictions $dismissalRestrictions
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface RequiredPullRequestReviews
{
}
