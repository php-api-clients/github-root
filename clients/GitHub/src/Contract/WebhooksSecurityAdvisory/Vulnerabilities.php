<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory;

use ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion;
use ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\Package;

/**
 * @property ?FirstPatchedVersion $firstPatchedVersion
 * @property Package $package
 * @property string $severity
 * @property string $vulnerableVersionRange
 */
interface Vulnerabilities
{
}
