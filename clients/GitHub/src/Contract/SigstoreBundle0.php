<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SigstoreBundle0\DsseEnvelope;
use ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial;

/**
 * @property ?string $mediaType
 * @property ?VerificationMaterial $verificationMaterial
 * @property ?DsseEnvelope $dsseEnvelope
 */
interface SigstoreBundle0
{
}
