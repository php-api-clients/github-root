<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Discussion;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhooksAnswer;

/**
 * @property string $action
 * @property Discussion $discussion
 * @property WebhooksAnswer $oldAnswer
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property ?SimpleUser $sender
 */
interface WebhookDiscussionUnanswered
{
}
