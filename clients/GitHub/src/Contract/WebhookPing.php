<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPing\Hook $hook
 * @property ?int $hookId
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property ?string $zen
 */
interface WebhookPing
{
}
