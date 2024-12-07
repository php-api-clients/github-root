<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookStatus;

use ApiClients\Client\GitHub\Schema\WebhookStatus\Branches\Commit;

/**
 * @property Commit $commit
 * @property string $name
 * @property bool $protected
 */
interface Branches
{
}
