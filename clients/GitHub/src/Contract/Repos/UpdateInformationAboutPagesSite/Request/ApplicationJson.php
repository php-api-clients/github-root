<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\UpdateInformationAboutPagesSite\Request;

use ApiClients\Client\GitHub\Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source\One;

/**
 * @property ?string $cname
 * @property ?bool $httpsEnforced
 * @property ?string $buildType
 * @property string|One|null $source
 */
interface ApplicationJson
{
}
