<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestEdited\Changes;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base\Ref;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base\Sha;

/**
 * @property Ref $ref
 * @property Sha $sha
 */
interface Base
{
}
