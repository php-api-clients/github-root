<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CvssSeverities\CvssVFour;
use ApiClients\Client\GitHub\Schema\CvssSeverities\CvssVThree;

/**
 * @property ?CvssVThree $cvssVThree
 * @property ?CvssVFour $cvssVFour
 */
interface CvssSeverities
{
}
