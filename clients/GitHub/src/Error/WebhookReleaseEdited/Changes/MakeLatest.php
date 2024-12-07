<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookReleaseEdited\Changes;

use Error;

final class MakeLatest extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\MakeLatest $error)
    {
    }
}
