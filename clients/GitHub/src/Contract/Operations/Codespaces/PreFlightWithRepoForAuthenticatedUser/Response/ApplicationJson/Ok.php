<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok\Defaults;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?SimpleUser $billableOwner
 * @property ?Defaults $defaults
 */
interface Ok
{
}
