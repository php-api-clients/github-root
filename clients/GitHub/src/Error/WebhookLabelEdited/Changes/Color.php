<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookLabelEdited\Changes;

use Error;

final class Color extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Color $error)
    {
    }
}
