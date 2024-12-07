<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\HookDelivery;

use ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers;

/**
 * @property ?Headers $headers
 * @property ?string $payload
 */
interface Response
{
}
