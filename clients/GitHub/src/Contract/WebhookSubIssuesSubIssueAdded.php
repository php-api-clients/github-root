<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property int|float $subIssueId
 * @property Issue $subIssue
 * @property Repository $subIssueRepo
 * @property int|float $parentIssueId
 * @property Issue $parentIssue
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?RepositoryWebhooks $repository
 * @property ?SimpleUser $sender
 */
interface WebhookSubIssuesSubIssueAdded
{
}
