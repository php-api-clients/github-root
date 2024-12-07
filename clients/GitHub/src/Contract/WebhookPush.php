<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit;
use ApiClients\Client\GitHub\Schema\WebhookPush\Pusher;
use ApiClients\Client\GitHub\Schema\WebhookPush\Repository;

/**
 * @property string $after
 * @property ?string $baseRef
 * @property string $before
 * @property array $commits
 * @property string $compare
 * @property bool $created
 * @property bool $deleted
 * @property ?EnterpriseWebhooks $enterprise
 * @property bool $forced
 * @property ?HeadCommit $headCommit
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property Pusher $pusher
 * @property string $ref
 * @property Repository $repository
 * @property ?SimpleUser $sender
 */
interface WebhookPush
{
}
