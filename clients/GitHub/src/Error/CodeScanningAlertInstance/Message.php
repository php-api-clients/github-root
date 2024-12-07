<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeScanningAlertInstance;

use Error;

final class Message extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message $error)
    {
    }
}
