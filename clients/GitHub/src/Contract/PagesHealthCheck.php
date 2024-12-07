<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PagesHealthCheck\AltDomain;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain;

/**
 * @property ?Domain $domain
 * @property ?AltDomain $altDomain
 */
interface PagesHealthCheck
{
}
