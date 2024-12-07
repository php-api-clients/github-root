<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Orgs\UpdateWebhook\Request;

use ApiClients\Client\GitHub\Schema\Orgs\UpdateWebhook\Request\ApplicationJson\Config;

/**
 * @property ?Config $config
 * @property ?array $events
 * @property ?bool $active
 * @property ?string $name
 */
interface ApplicationJson
{
}
