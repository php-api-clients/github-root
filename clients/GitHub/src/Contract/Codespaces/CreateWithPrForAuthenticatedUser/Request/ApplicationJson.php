<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Codespaces\CreateWithPrForAuthenticatedUser\Request;

/**
 * @property ?string $location
 * @property ?string $geo
 * @property ?string $clientIp
 * @property ?string $machine
 * @property ?string $devcontainerPath
 * @property ?bool $multiRepoPermissionsOptOut
 * @property ?string $workingDirectory
 * @property ?int $idleTimeoutMinutes
 * @property ?string $displayName
 * @property ?int $retentionPeriodMinutes
 */
interface ApplicationJson
{
}
