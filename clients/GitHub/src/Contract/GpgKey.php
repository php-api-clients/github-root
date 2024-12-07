<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property ?string $name
 * @property ?int $primaryKeyId
 * @property string $keyId
 * @property string $publicKey
 * @property array $emails
 * @property array $subkeys
 * @property bool $canSign
 * @property bool $canEncryptComms
 * @property bool $canEncryptStorage
 * @property bool $canCertify
 * @property string $createdAt
 * @property ?string $expiresAt
 * @property bool $revoked
 * @property ?string $rawKey
 */
interface GpgKey
{
}
