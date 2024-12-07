<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SecretScanningScanHistory;

use Error;

final class CustomPatternBackfillScans extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SecretScanningScanHistory\CustomPatternBackfillScans $error)
    {
    }
}
