<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error;

use Error;

final class WebhookConfigContentType extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookConfigContentType $error)
    {
    }
}
