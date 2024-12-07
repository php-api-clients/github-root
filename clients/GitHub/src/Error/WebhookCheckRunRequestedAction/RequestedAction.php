<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCheckRunRequestedAction;

use Error;

final class RequestedAction extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCheckRunRequestedAction\RequestedAction $error)
    {
    }
}
