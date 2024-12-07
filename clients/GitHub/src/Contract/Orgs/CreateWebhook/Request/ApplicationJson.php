<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Orgs\CreateWebhook\Request;

use ApiClients\Client\GitHub\Schema\Orgs\CreateWebhook\Request\ApplicationJson\Config;

/**
 * @property string $name
 * @property Config $config
 * @property ?array $events
 * @property ?bool $active
 */
interface ApplicationJson
{
}
