<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?Milestone $milestone
 * @property int $number
 * @property ?OrganizationSimpleWebhooks $organization
 * @property WebhooksPullRequest5 $pullRequest
 * @property RepositoryWebhooks $repository
 * @property ?SimpleUser $sender
 */
interface WebhookPullRequestDemilestoned
{
}
