<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CheckSuitePreference\Preferences;
use ApiClients\Client\GitHub\Schema\MinimalRepository;

/**
 * @property Preferences $preferences
 * @property MinimalRepository $repository
 */
interface CheckSuitePreference
{
}
