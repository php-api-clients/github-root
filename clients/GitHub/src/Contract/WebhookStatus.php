<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

/**
 * @property ?string $avatarUrl
 * @property array $branches
 * @property Commit $commit
 * @property string $context
 * @property string $createdAt
 * @property ?string $description
 * @property ?EnterpriseWebhooks $enterprise
 * @property int $id
 * @property ?SimpleInstallation $installation
 * @property string $name
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 * @property string $sha
 * @property string $state
 * @property ?string $targetUrl
 * @property string $updatedAt
 */
interface WebhookStatus
{
}
