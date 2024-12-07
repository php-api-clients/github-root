<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\OrganizationProgrammaticAccessGrantRequest\Permissions;

use Error;

final class Organization extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization $error)
    {
    }
}
