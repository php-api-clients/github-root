<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksReview;

use ApiClients\Client\GitHub\Schema\WebhooksReview\Links\Html;
use ApiClients\Client\GitHub\Schema\WebhooksReview\Links\PullRequest;

/**
 * @property Html $html
 * @property PullRequest $pullRequest
 */
interface Links
{
}
