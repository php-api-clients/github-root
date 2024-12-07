<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\HookDelivery;

use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers;
use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload;

/**
 * @property ?Headers $headers
 * @property ?Payload $payload
 */
interface Request
{
}
