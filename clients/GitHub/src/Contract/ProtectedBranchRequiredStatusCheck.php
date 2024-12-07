<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $url
 * @property ?string $enforcementLevel
 * @property array $contexts
 * @property array $checks
 * @property ?string $contextsUrl
 * @property ?bool $strict
 */
interface ProtectedBranchRequiredStatusCheck
{
}
