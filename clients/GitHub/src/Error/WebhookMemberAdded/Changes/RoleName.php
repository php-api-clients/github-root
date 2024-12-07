<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMemberAdded\Changes;

use Error;

final class RoleName extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes\RoleName $error)
    {
    }
}
