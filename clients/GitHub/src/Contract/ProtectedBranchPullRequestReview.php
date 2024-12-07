<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions;

/**
 * @property ?string $url
 * @property ?DismissalRestrictions $dismissalRestrictions
 * @property ?BypassPullRequestAllowances $bypassPullRequestAllowances
 * @property bool $dismissStaleReviews
 * @property bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 */
interface ProtectedBranchPullRequestReview
{
}
