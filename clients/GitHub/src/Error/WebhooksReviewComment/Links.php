<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksReviewComment;

use Error;

final class Links extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links $error)
    {
    }
}
