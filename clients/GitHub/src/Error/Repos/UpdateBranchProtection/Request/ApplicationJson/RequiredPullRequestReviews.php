<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\UpdateBranchProtection\Request\ApplicationJson;

use Error;

final class RequiredPullRequestReviews extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews $error)
    {
    }
}
