<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Gists\Create\Request;

use ApiClients\Client\GitHub\Schema\Gists\Create\Request\ApplicationJson\Files;

/**
 * @property ?string $description
 * @property Files $files
 * @property bool|string|null $public
 */
interface ApplicationJson
{
}
