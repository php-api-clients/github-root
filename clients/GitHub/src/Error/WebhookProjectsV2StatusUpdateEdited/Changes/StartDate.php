<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectsV2StatusUpdateEdited\Changes;

use Error;

final class StartDate extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate $error)
    {
    }
}
