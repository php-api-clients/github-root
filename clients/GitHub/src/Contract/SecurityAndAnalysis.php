<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\DependabotSecurityUpdates;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanning;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningAiDetection;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningNonProviderPatterns;
use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\SecretScanningPushProtection;

/**
 * @property ?AdvancedSecurity $advancedSecurity
 * @property ?DependabotSecurityUpdates $dependabotSecurityUpdates
 * @property ?SecretScanning $secretScanning
 * @property ?SecretScanningPushProtection $secretScanningPushProtection
 * @property ?SecretScanningNonProviderPatterns $secretScanningNonProviderPatterns
 * @property ?SecretScanningAiDetection $secretScanningAiDetection
 */
interface SecurityAndAnalysis
{
}
