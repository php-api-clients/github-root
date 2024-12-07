<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Gists\Update\Request;

use ApiClients\Client\GitHub\Schema\Gists\Update\Request\ApplicationJson\Files;

/**
 * @property ?string $description
 * @property ?Files $files
 */
interface ApplicationJson
{
}
