<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Actions\CreateWorkflowDispatch\Request;

use ApiClients\Client\GitHub\Schema\Actions\CreateWorkflowDispatch\Request\ApplicationJson\Inputs;

/**
 * @property string $ref
 * @property ?Inputs $inputs
 */
interface ApplicationJson
{
}
