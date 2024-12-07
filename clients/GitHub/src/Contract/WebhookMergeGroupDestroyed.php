<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MergeGroup;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property ?string $reason
 * @property ?SimpleInstallation $installation
 * @property MergeGroup $mergeGroup
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?RepositoryWebhooks $repository
 * @property ?SimpleUser $sender
 */
interface WebhookMergeGroupDestroyed
{
}
