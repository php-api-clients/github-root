<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Gists\CheckIsStarred\Response\ApplicationJson;

use Error;

final class NotFound extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound $error)
    {
    }
}
