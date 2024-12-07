<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property int|float $parentIssueId
 * @property \ApiClients\Client\GitHub\Schema\Issue $parentIssue
 * @property \ApiClients\Client\GitHub\Schema\Repository $parentIssueRepo
 * @property int|float $subIssueId
 * @property \ApiClients\Client\GitHub\Schema\Issue $subIssue
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookSubIssuesParentIssueAdded
{
}
