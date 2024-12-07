<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\UpdateBranchProtection\Request\ApplicationJson;

use ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\BypassPullRequestAllowances;
use ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\DismissalRestrictions;

/**
 * @property ?DismissalRestrictions $dismissalRestrictions
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface RequiredPullRequestReviews
{
}
