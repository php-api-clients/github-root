<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Account $account
 * @property string $action
 * @property \ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Changes $changes
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property \ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property string $targetType
 */
interface WebhookInstallationTargetRenamed
{
}
