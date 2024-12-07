<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion $firstPatchedVersion
 * @property \ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\Package $package
 * @property string $severity
 * @property string $vulnerableVersionRange
 */
interface Vulnerabilities
{
}
