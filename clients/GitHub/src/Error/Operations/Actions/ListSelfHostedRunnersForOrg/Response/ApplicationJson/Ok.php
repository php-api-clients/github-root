<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson;

use Error;

final class Ok extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok $error)
    {
    }
}
