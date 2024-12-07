<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateDispatchEvent\Request;

use ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request\ApplicationJson\ClientPayload;

/**
 * @property string $eventType
 * @property ?ClientPayload $clientPayload
 */
interface ApplicationJson
{
}
