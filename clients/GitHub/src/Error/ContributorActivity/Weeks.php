<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ContributorActivity;

use Error;

final class Weeks extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ContributorActivity\Weeks $error)
    {
    }
}
