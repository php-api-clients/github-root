<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\ProtectedBranchPullRequestReview;

final class DismissalRestrictions extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview\DismissalRestrictions $error)
    {
    }
}
