<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMemberEdited\Changes;

use Error;

final class OldPermission extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\OldPermission $error)
    {
    }
}
