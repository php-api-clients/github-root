<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRepositoryEdited;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\DefaultBranch;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Homepage;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Topics;

/**
 * @property ?DefaultBranch $defaultBranch
 * @property ?Description $description
 * @property ?Homepage $homepage
 * @property ?Topics $topics
 */
interface Changes
{
}
