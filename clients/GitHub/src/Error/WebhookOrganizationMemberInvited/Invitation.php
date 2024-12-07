<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookOrganizationMemberInvited;

use Error;

final class Invitation extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookOrganizationMemberInvited\Invitation $error)
    {
    }
}
