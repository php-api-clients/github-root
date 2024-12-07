<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error;

use Error;

final class Page extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Page $error)
    {
    }
}
