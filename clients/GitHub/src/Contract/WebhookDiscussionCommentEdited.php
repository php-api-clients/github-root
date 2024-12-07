<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Discussion;
use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookDiscussionCommentEdited\Changes;
use ApiClients\Client\GitHub\Schema\WebhooksComment;

/**
 * @property string $action
 * @property Changes $changes
 * @property WebhooksComment $comment
 * @property Discussion $discussion
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookDiscussionCommentEdited
{
}
