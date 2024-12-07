<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\TimelineReviewedEvent;

use ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html;
use ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\PullRequest;

/**
 * @property Html $html
 * @property PullRequest $pullRequest
 */
interface Links
{
}
