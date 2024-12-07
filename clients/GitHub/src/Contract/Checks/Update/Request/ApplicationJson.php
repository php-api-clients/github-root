<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Checks\Update\Request;

use ApiClients\Client\GitHub\Schema\Checks\Update\Request\ApplicationJson\Output;

/**
 * @property ?string $name
 * @property ?string $detailsUrl
 * @property ?string $externalId
 * @property ?string $startedAt
 * @property ?string $status
 * @property ?string $conclusion
 * @property ?string $completedAt
 * @property ?Output $output
 * @property ?array $actions
 */
interface ApplicationJson
{
}
