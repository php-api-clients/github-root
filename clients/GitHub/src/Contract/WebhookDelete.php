<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property string $pusherType
 * @property string $ref
 * @property string $refType
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookDelete
{
}
