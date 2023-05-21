<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class ServiceUnavailable extends Error
{
    public function __construct(public int $status, public Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable $error)
    {
    }
}
