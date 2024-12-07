<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssuesEdited;

use ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes\Title;

/**
 * @property ?Body $body
 * @property ?Title $title
 */
interface Changes
{
}
