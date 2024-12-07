<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\ReviewDismissedIssueEvent;

/**
 * @property string $state
 * @property int $reviewId
 * @property ?string $dismissalMessage
 * @property ?string $dismissalCommitId
 */
interface DismissedReview
{
}
