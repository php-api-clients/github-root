<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest $pullRequest
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\Review $review
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookPullRequestReviewDismissed
{
}
