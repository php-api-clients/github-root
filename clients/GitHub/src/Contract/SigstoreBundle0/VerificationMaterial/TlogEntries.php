<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\SigstoreBundle0\VerificationMaterial;

use ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\InclusionPromise;
use ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\KindVersion;
use ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\LogId;

/**
 * @property ?string $logIndex
 * @property ?LogId $logId
 * @property ?KindVersion $kindVersion
 * @property ?string $integratedTime
 * @property ?InclusionPromise $inclusionPromise
 * @property ?string $inclusionProof
 * @property ?string $canonicalizedBody
 */
interface TlogEntries
{
}
