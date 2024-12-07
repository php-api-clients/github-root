<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectsV2StatusUpdateEdited;

use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate;

/**
 * @property ?Body $body
 * @property ?Status $status
 * @property ?StartDate $startDate
 * @property ?TargetDate $targetDate
 */
interface Changes
{
}
