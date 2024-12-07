<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Authorization\App;
use ApiClients\Client\GitHub\Schema\ScopedInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $url
 * @property ?array $scopes
 * @property string $token
 * @property ?string $tokenLastEight
 * @property ?string $hashedToken
 * @property App $app
 * @property ?string $note
 * @property ?string $noteUrl
 * @property string $updatedAt
 * @property string $createdAt
 * @property ?string $fingerprint
 * @property ?SimpleUser $user
 * @property ?ScopedInstallation $installation
 * @property ?string $expiresAt
 */
interface Authorization
{
}
