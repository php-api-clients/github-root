<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\ProjectsV2Item;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property ?SimpleInstallation $installation
 * @property OrganizationSimpleWebhooks $organization
 * @property ProjectsV2Item $projectsVTwoItem
 * @property SimpleUser $sender
 */
interface WebhookProjectsV2ItemCreated
{
}
