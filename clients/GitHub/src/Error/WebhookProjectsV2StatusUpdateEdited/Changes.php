<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectsV2StatusUpdateEdited;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes $error)
    {
    }
}
