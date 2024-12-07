<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations;

use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\DsseEnvelope;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\VerificationMaterial;

/**
 * @property ?string $mediaType
 * @property ?VerificationMaterial $verificationMaterial
 * @property ?DsseEnvelope $dsseEnvelope
 */
interface Bundle
{
}
