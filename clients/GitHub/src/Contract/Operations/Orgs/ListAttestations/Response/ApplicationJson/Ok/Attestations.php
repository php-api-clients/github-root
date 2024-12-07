<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok;

use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle;

/**
 * @property ?Bundle $bundle
 * @property ?int $repositoryId
 */
interface Attestations
{
}
