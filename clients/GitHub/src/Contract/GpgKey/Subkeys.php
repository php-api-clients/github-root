<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\GpgKey;

/**
 * @property ?int $id
 * @property ?int $primaryKeyId
 * @property ?string $keyId
 * @property ?string $publicKey
 * @property ?array $emails
 * @property ?array $subkeys
 * @property ?bool $canSign
 * @property ?bool $canEncryptComms
 * @property ?bool $canEncryptStorage
 * @property ?bool $canCertify
 * @property ?string $createdAt
 * @property ?string $expiresAt
 * @property ?string $rawKey
 * @property ?bool $revoked
 */
interface Subkeys
{
}
