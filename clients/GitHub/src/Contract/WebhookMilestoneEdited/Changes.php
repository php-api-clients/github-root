<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMilestoneEdited;

use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\DueOn;
use ApiClients\Client\GitHub\Schema\WebhookMilestoneEdited\Changes\Title;

/**
 * @property ?Description $description
 * @property ?DueOn $dueOn
 * @property ?Title $title
 */
interface Changes
{
}
