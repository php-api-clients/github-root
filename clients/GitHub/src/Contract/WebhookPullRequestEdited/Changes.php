<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestEdited;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Title;

/**
 * @property ?Base $base
 * @property ?Body $body
 * @property ?Title $title
 */
interface Changes
{
}
