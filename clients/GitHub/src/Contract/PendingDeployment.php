<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PendingDeployment\Environment;

/**
 * @property Environment $environment
 * @property int $waitTimer
 * @property ?string $waitTimerStartedAt
 * @property bool $currentUserCanApprove
 * @property array $reviewers
 */
interface PendingDeployment
{
}
