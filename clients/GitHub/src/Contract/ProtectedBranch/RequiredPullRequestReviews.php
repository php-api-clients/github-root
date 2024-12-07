<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\ProtectedBranch;

use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\BypassPullRequestAllowances;
use ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredPullRequestReviews\DismissalRestrictions;

/**
 * @property string $url
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?DismissalRestrictions $dismissalRestrictions
 * @property ?BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface RequiredPullRequestReviews
{
}
