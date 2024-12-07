<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksReviewComment;

use ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\Html;
use ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\PullRequest;
use ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\Self_;

/**
 * @property Html $html
 * @property PullRequest $pullRequest
 * @property Self_ $self
 */
interface Links
{
}
