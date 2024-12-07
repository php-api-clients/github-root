<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\Update\Request\ApplicationJson;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\AdvancedSecurity $advancedSecurity
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanning $secretScanning
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningPushProtection $secretScanningPushProtection
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningAiDetection $secretScanningAiDetection
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningNonProviderPatterns $secretScanningNonProviderPatterns
 */
interface SecurityAndAnalysis
{
}
