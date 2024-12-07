<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue;
use ApiClients\Client\GitHub\Schema\WebhooksIssueComment;

/**
 * @property string $action
 * @property WebhooksIssueComment $comment
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property Issue $issue
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookIssueCommentDeleted
{
}
