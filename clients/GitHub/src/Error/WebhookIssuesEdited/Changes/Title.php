<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesEdited\Changes;

use Error;

final class Title extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title $error)
    {
    }
}
