<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDiscussionEdited;

use ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited\Changes\Title;

/**
 * @property ?Body $body
 * @property ?Title $title
 */
interface Changes
{
}
