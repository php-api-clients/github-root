<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ProtectedBranchPullRequestReview;

use Error;

final class BypassPullRequestAllowances extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\BypassPullRequestAllowances $error)
    {
    }
}
