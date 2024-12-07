<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\ReviewDismissedIssueEvent;

final class DismissedReview extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ReviewDismissedIssueEvent\DismissedReview $error)
    {
    }
}
