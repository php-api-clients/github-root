<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property \ApiClients\Client\GitHub\Schema\Installation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property array $repositoriesAdded
 * @property array $repositoriesRemoved
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property string $repositorySelection
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksUser $requester
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookInstallationRepositoriesAdded
{
}
