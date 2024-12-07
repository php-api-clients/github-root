<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookTeamEdited;

use ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Name;
use ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\NotificationSetting;
use ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Privacy;
use ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Repository;

/**
 * @property ?Description $description
 * @property ?Name $name
 * @property ?Privacy $privacy
 * @property ?NotificationSetting $notificationSetting
 * @property ?Repository $repository
 */
interface Changes
{
}
