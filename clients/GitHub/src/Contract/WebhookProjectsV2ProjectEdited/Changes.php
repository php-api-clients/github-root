<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectsV2ProjectEdited;

use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\ShortDescription;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes\Title;

/**
 * @property ?Description $description
 * @property ?Public_ $public
 * @property ?ShortDescription $shortDescription
 * @property ?Title $title
 */
interface Changes
{
}
