<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\PendingDeployment\Environment $environment
 * @property int $waitTimer
 * @property ?string $waitTimerStartedAt
 * @property bool $currentUserCanApprove
 * @property array $reviewers
 */
interface PendingDeployment
{
}
