<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\RateLimitOverview;

use ApiClients\Client\GitHub\Schema\RateLimit;

/**
 * @property RateLimit $core
 * @property ?RateLimit $graphql
 * @property RateLimit $search
 * @property ?RateLimit $codeSearch
 * @property ?RateLimit $sourceImport
 * @property ?RateLimit $integrationManifest
 * @property ?RateLimit $codeScanningUpload
 * @property ?RateLimit $actionsRunnerRegistration
 * @property ?RateLimit $scim
 * @property ?RateLimit $dependencySnapshots
 */
interface Resources
{
}
