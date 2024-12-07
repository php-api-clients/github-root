<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesOpened\Changes;

use Error;

final class OldRepository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository $error)
    {
    }
}
