<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookLabelEdited\Changes;

use Error;

final class Description extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Description $error)
    {
    }
}
