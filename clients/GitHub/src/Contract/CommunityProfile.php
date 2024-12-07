<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CommunityProfile\Files;

/**
 * @property int $healthPercentage
 * @property ?string $description
 * @property ?string $documentation
 * @property Files $files
 * @property ?string $updatedAt
 * @property ?bool $contentReportsEnabled
 */
interface CommunityProfile
{
}
