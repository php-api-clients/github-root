<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCodeScanningAlertReopened\Alert;

use Error;

final class DismissedBy extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\DismissedBy $error)
    {
    }
}
