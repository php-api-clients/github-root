<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata;

/**
 * @property ?string $message
 * @property ?string $documentationUrl
 * @property ?string $status
 * @property ?Metadata $metadata
 */
interface RepositoryRuleViolationError
{
}
