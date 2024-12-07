<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssuesOpened;

use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldIssue;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Changes\OldRepository;

/**
 * @property ?OldIssue $oldIssue
 * @property OldRepository $oldRepository
 */
interface Changes
{
}
