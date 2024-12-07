<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PagesHealthCheck;

/**
 * @property ?string $host
 * @property ?string $uri
 * @property ?string $nameservers
 * @property ?bool $dnsResolves
 * @property ?bool $isProxied
 * @property ?bool $isCloudflareIp
 * @property ?bool $isFastlyIp
 * @property ?bool $isOldIpAddress
 * @property ?bool $isARecord
 * @property ?bool $hasCnameRecord
 * @property ?bool $hasMxRecordsPresent
 * @property ?bool $isValidDomain
 * @property ?bool $isApexDomain
 * @property ?bool $shouldBeARecord
 * @property ?bool $isCnameToGithubUserDomain
 * @property ?bool $isCnameToPagesDotGithubDotCom
 * @property ?bool $isCnameToFastly
 * @property ?bool $isPointedToGithubPagesIp
 * @property ?bool $isNonGithubPagesIpPresent
 * @property ?bool $isPagesDomain
 * @property ?bool $isServedByPages
 * @property ?bool $isValid
 * @property ?string $reason
 * @property ?bool $respondsToHttps
 * @property ?bool $enforcesHttps
 * @property ?string $httpsError
 * @property ?bool $isHttpsEligible
 * @property ?string $caaError
 */
interface AltDomain
{
}
