<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $url
 * @property ?array $scopes
 * @property string $token
 * @property ?string $tokenLastEight
 * @property ?string $hashedToken
 * @property \ApiClients\Client\GitHub\Schema\Authorization\App $app
 * @property ?string $note
 * @property ?string $noteUrl
 * @property string $updatedAt
 * @property string $createdAt
 * @property ?string $fingerprint
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property ?\ApiClients\Client\GitHub\Schema\ScopedInstallation $installation
 * @property ?string $expiresAt
 */
interface Authorization
{
}
