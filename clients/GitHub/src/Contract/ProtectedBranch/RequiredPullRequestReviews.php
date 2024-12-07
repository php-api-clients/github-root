<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\ProtectedBranch;

/**
 * @property string $url
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions $dismissalRestrictions
 * @property ?\ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface RequiredPullRequestReviews
{
}
