<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestUnlabeled\PullRequest;
use ApiClients\Client\GitHub\Schema\WebhooksLabel;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?WebhooksLabel $label
 * @property int $number
 * @property ?OrganizationSimpleWebhooks $organization
 * @property PullRequest $pullRequest
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookPullRequestUnlabeled
{
}
