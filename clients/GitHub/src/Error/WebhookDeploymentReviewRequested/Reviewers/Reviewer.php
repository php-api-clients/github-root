<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentReviewRequested\Reviewers;

use Error;

final class Reviewer extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\Reviewers\Reviewer $error)
    {
    }
}
