<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CommunityProfile;

use ApiClients\Client\GitHub\Schema\CodeOfConductSimple;
use ApiClients\Client\GitHub\Schema\CommunityHealthFile;
use ApiClients\Client\GitHub\Schema\LicenseSimple;

/**
 * @property ?CodeOfConductSimple $codeOfConduct
 * @property ?CommunityHealthFile $codeOfConductFile
 * @property ?LicenseSimple $license
 * @property ?CommunityHealthFile $contributing
 * @property ?CommunityHealthFile $readme
 * @property ?CommunityHealthFile $issueTemplate
 * @property ?CommunityHealthFile $pullRequestTemplate
 */
interface Files
{
}
