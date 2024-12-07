<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration\DependencyGraphAutosubmitActionOptions;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration\SecretScanningDelegatedBypassOptions;

/**
 * @property ?int $id
 * @property ?string $name
 * @property ?string $targetType
 * @property ?string $description
 * @property ?string $advancedSecurity
 * @property ?string $dependencyGraph
 * @property ?string $dependencyGraphAutosubmitAction
 * @property ?DependencyGraphAutosubmitActionOptions $dependencyGraphAutosubmitActionOptions
 * @property ?string $dependabotAlerts
 * @property ?string $dependabotSecurityUpdates
 * @property ?string $codeScanningDefaultSetup
 * @property ?string $secretScanning
 * @property ?string $secretScanningPushProtection
 * @property ?string $secretScanningDelegatedBypass
 * @property ?SecretScanningDelegatedBypassOptions $secretScanningDelegatedBypassOptions
 * @property ?string $secretScanningValidityChecks
 * @property ?string $secretScanningNonProviderPatterns
 * @property ?string $privateVulnerabilityReporting
 * @property ?string $enforcement
 * @property ?string $url
 * @property ?string $htmlUrl
 * @property ?string $createdAt
 * @property ?string $updatedAt
 */
interface CodeSecurityConfiguration
{
}
