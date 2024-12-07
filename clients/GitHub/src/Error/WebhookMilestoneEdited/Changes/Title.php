<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMilestoneEdited\Changes;

use Error;

final class Title extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Title $error)
    {
    }
}
