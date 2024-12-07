<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksSponsorship;

use Error;

final class Tier extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksSponsorship\Tier $error)
    {
    }
}
