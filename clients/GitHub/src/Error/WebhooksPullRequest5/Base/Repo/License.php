<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksPullRequest5\Base\Repo;

use Error;

final class License extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Base\Repo\License $error)
    {
    }
}
