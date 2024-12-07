<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CodeSecurity\UpdateConfiguration\Request;

use ApiClients\Client\GitHub\Schema\CodeSecurity\UpdateConfiguration\Request\ApplicationJson\DependencyGraphAutosubmitActionOptions;
use ApiClients\Client\GitHub\Schema\CodeSecurity\UpdateConfiguration\Request\ApplicationJson\SecretScanningDelegatedBypassOptions;

/**
 * @property ?string $name
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
 */
interface ApplicationJson
{
}
