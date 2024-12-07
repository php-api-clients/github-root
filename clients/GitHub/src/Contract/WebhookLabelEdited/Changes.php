<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookLabelEdited;

use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Color;
use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes\Name;

/**
 * @property ?Color $color
 * @property ?Description $description
 * @property ?Name $name
 */
interface Changes
{
}
