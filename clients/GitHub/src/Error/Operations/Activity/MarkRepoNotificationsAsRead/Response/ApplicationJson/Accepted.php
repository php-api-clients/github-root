<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson;

use Error;

final class Accepted extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted $error)
    {
    }
}
