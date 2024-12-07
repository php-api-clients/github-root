<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?int $number
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $url
 * @property ?string $htmlUrl
 * @property ?string $locationsUrl
 * @property ?string $state
 * @property ?string $resolution
 * @property ?string $resolvedAt
 * @property ?SimpleUser $resolvedBy
 * @property ?string $secretType
 * @property ?string $secretTypeDisplayName
 * @property ?string $secret
 * @property ?SimpleRepository $repository
 * @property ?bool $pushProtectionBypassed
 * @property ?SimpleUser $pushProtectionBypassedBy
 * @property ?string $pushProtectionBypassedAt
 * @property ?SimpleUser $pushProtectionBypassRequestReviewer
 * @property ?string $pushProtectionBypassRequestComment
 * @property ?string $pushProtectionBypassRequestHtmlUrl
 * @property ?string $resolutionComment
 * @property ?string $validity
 * @property ?bool $publiclyLeaked
 * @property ?bool $multiRepo
 */
interface OrganizationSecretScanningAlert
{
}
