<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PullRequestReviewComment;

use ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\Html;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\PullRequest;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links\Self_;

/**
 * @property Self_ $self
 * @property Html $html
 * @property PullRequest $pullRequest
 */
interface Links
{
}
