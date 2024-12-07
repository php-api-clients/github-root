<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $resolvedBy
 * @property ?string $secretType
 * @property ?string $secretTypeDisplayName
 * @property ?string $secret
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleRepository $repository
 * @property ?bool $pushProtectionBypassed
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $pushProtectionBypassedBy
 * @property ?string $pushProtectionBypassedAt
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $pushProtectionBypassRequestReviewer
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
