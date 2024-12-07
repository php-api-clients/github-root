<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksPullRequest5;

use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\AutoMerge\EnabledBy;

/**
 * @property ?string $commitMessage
 * @property ?string $commitTitle
 * @property ?EnabledBy $enabledBy
 * @property string $mergeMethod
 */
interface AutoMerge
{
}
