<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksPullRequest5;

use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Comments;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Commits;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Html;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Issue;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComment;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\ReviewComments;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Self_;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links\Statuses;

/**
 * @property Comments $comments
 * @property Commits $commits
 * @property Html $html
 * @property Issue $issue
 * @property ReviewComment $reviewComment
 * @property ReviewComments $reviewComments
 * @property Self_ $self
 * @property Statuses $statuses
 */
interface Links
{
}
