<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property \ApiClients\Client\GitHub\Schema\Discussion $discussion
 * @property \ApiClients\Client\GitHub\Schema\WebhooksAnswer $oldAnswer
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookDiscussionUnanswered
{
}
