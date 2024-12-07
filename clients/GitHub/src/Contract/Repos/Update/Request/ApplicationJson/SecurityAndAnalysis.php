<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\Update\Request\ApplicationJson;

use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\AdvancedSecurity;
use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanning;
use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningAiDetection;
use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningNonProviderPatterns;
use ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningPushProtection;

/**
 * @property ?AdvancedSecurity $advancedSecurity
 * @property ?SecretScanning $secretScanning
 * @property ?SecretScanningPushProtection $secretScanningPushProtection
 * @property ?SecretScanningAiDetection $secretScanningAiDetection
 * @property ?SecretScanningNonProviderPatterns $secretScanningNonProviderPatterns
 */
interface SecurityAndAnalysis
{
}
