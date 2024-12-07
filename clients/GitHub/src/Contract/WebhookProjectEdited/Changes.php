<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectEdited;

use ApiClients\Client\GitHub\Schema\WebhookProjectEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookProjectEdited\Changes\Name;

/**
 * @property ?Body $body
 * @property ?Name $name
 */
interface Changes
{
}
