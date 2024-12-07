<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDiscussionTransferred;

use ApiClients\Client\GitHub\Schema\Discussion;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;

/**
 * @property Discussion $newDiscussion
 * @property RepositoryWebhooks $newRepository
 */
interface Changes
{
}
