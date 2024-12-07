<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentStatusCreated\DeploymentStatus;

use Error;

final class PerformedViaGithubApp extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\PerformedViaGithubApp $error)
    {
    }
}
