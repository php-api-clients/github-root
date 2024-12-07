<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentStatusCreated;

use Error;

final class Deployment extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment $error)
    {
    }
}
