<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $after
 * @property ?string $baseRef
 * @property string $before
 * @property array $commits
 * @property string $compare
 * @property bool $created
 * @property bool $deleted
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property bool $forced
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit $headCommit
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\WebhookPush\Pusher $pusher
 * @property string $ref
 * @property \ApiClients\Client\GitHub\Schema\WebhookPush\Repository $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookPush
{
}
