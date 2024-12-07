<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $avatarUrl
 * @property array $branches
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit $commit
 * @property string $context
 * @property string $createdAt
 * @property ?string $description
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property int $id
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property string $name
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property string $sha
 * @property string $state
 * @property ?string $targetUrl
 * @property string $updatedAt
 */
interface WebhookStatus
{
}
