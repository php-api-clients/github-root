<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\TimelineReviewedEvent\Links;

use Error;

final class Html extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html $error)
    {
    }
}
