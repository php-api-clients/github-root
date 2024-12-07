<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesTransferred\Changes;

use Error;

final class NewRepository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository $error)
    {
    }
}
