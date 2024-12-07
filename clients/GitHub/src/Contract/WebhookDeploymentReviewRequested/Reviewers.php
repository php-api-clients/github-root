<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentReviewRequested;

use ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\Reviewers\Reviewer;

/**
 * @property ?Reviewer $reviewer
 * @property ?string $type
 */
interface Reviewers
{
}
