<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Pulls\CreateReview\Request\ApplicationJson;

use Error;

final class Comments extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Pulls\CreateReview\Request\ApplicationJson\Comments $error)
    {
    }
}
