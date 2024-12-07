<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Operations\Gists\Get\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden\Block;

/**
 * @property ?Block $block
 * @property ?string $message
 * @property ?string $documentationUrl
 */
interface Forbidden
{
}
