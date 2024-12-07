<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Checks\Create\Request;

use ApiClients\Client\GitHub\Schema\Checks\Create\Request\ApplicationJson\Output;

/**
 * @property string $name
 * @property string $headSha
 * @property ?string $detailsUrl
 * @property ?string $externalId
 * @property ?string $status
 * @property ?string $startedAt
 * @property ?string $conclusion
 * @property ?string $completedAt
 * @property ?Output $output
 * @property ?array $actions
 */
interface ApplicationJson
{
}
