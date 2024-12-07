<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookStatus\Commit\Commit;

use Error;

final class Verification extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Verification $error)
    {
    }
}
