<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookOrganizationRenamed\Changes;

use Error;

final class Login extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed\Changes\Login $error)
    {
    }
}
