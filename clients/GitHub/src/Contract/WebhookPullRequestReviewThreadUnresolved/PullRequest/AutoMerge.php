<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewThreadUnresolved\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadUnresolved\PullRequest\AutoMerge\EnabledBy;

/**
 * @property ?string $commitMessage
 * @property string $commitTitle
 * @property ?EnabledBy $enabledBy
 * @property string $mergeMethod
 */
interface AutoMerge
{
}
