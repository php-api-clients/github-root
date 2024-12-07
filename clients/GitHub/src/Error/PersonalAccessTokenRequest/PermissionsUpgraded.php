<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PersonalAccessTokenRequest;

use Error;

final class PermissionsUpgraded extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded $error)
    {
    }
}
