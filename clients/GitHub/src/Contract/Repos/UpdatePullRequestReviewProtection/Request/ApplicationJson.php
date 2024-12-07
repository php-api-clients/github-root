<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\UpdatePullRequestReviewProtection\Request;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdatePullRequestReviewProtection\Request\ApplicationJson\DismissalRestrictions $dismissalRestrictions
 * @property ?bool $dismissStaleReviews
 * @property ?bool $requireCodeOwnerReviews
 * @property ?int $requiredApprovingReviewCount
 * @property ?bool $requireLastPushApproval
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\UpdatePullRequestReviewProtection\Request\ApplicationJson\BypassPullRequestAllowances $bypassPullRequestAllowances
 */
interface ApplicationJson
{
}
