<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Actions\CreateWorkflowDispatch\Request\ApplicationJson;

use Error;

final class Inputs extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Actions\CreateWorkflowDispatch\Request\ApplicationJson\Inputs $error)
    {
    }
}
