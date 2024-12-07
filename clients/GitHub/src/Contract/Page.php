<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property ?string $status
 * @property ?string $cname
 * @property ?string $protectedDomainState
 * @property ?string $pendingDomainUnverifiedAt
 * @property bool $customFourHundredFour
 * @property ?string $htmlUrl
 * @property ?string $buildType
 * @property ?\ApiClients\Client\GitHub\Schema\PagesSourceHash $source
 * @property bool $public
 * @property ?\ApiClients\Client\GitHub\Schema\PagesHttpsCertificate $httpsCertificate
 * @property ?bool $httpsEnforced
 */
interface Page
{
}
