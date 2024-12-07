<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookCodeScanningAlertReopenedByUser;

final class Alert extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert $error)
    {
    }
}
