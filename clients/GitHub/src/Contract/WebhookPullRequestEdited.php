<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\PullRequestWebhook;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes;

/**
 * @property string $action
 * @property Changes $changes
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property int $number
 * @property ?OrganizationSimpleWebhooks $organization
 * @property PullRequestWebhook $pullRequest
 * @property RepositoryWebhooks $repository
 * @property ?SimpleUser $sender
 */
interface WebhookPullRequestEdited
{
}
