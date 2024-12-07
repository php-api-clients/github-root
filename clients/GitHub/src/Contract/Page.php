<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PagesHttpsCertificate;
use ApiClients\Client\GitHub\Schema\PagesSourceHash;

/**
 * @property string $url
 * @property ?string $status
 * @property ?string $cname
 * @property ?string $protectedDomainState
 * @property ?string $pendingDomainUnverifiedAt
 * @property bool $customFourHundredFour
 * @property ?string $htmlUrl
 * @property ?string $buildType
 * @property ?PagesSourceHash $source
 * @property bool $public
 * @property ?PagesHttpsCertificate $httpsCertificate
 * @property ?bool $httpsEnforced
 */
interface Page
{
}
