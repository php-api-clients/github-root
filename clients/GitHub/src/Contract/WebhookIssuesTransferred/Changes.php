<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssuesTransferred;

use ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewIssue;
use ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository;

/**
 * @property NewIssue $newIssue
 * @property NewRepository $newRepository
 */
interface Changes
{
}
