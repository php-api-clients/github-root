<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookCheckRunRequestedAction\RequestedAction;

/**
 * @property string $action
 * @property CheckRunWithSimpleCheckSuite $checkRun
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property ?RequestedAction $requestedAction
 * @property SimpleUser $sender
 */
interface WebhookCheckRunRequestedAction
{
}
