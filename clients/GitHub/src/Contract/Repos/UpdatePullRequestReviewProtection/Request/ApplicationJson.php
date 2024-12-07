<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\UpdatePullRequestReviewProtection\Request;

use ApiClients\Client\GitHub\Schema\Repos\UpdatePullRequestReviewProtection\Request\ApplicationJson\BypassPullRequestAllowances;
use ApiClients\Client\GitHub\Schema\Repos\UpdatePullRequestReviewProtection\Request\ApplicationJson\DismissalRestrictions;

/**
 * @property ?DismissalRestrictions $dismissalRestrictions
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface ApplicationJson
{
}
