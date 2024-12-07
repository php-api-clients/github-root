<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCodeScanningAlertAppearedInBranch\Alert;

use Error;

final class Tool extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool $error)
    {
    }
}
