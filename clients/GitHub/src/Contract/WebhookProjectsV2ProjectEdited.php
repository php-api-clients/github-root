<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\ProjectsV2;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes;

/**
 * @property string $action
 * @property Changes $changes
 * @property ?SimpleInstallation $installation
 * @property OrganizationSimpleWebhooks $organization
 * @property ProjectsV2 $projectsVTwo
 * @property SimpleUser $sender
 */
interface WebhookProjectsV2ProjectEdited
{
}
