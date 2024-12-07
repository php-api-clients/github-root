<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookReleaseEdited;

use ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\MakeLatest;
use ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes\Name;

/**
 * @property ?Body $body
 * @property ?Name $name
 * @property ?MakeLatest $makeLatest
 */
interface Changes
{
}
