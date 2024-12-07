<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksAlert\Dismisser;

/**
 * @property string $affectedPackageName
 * @property string $affectedRange
 * @property string $createdAt
 * @property ?string $dismissReason
 * @property ?string $dismissedAt
 * @property ?Dismisser $dismisser
 * @property string $externalIdentifier
 * @property ?string $externalReference
 * @property ?string $fixReason
 * @property ?string $fixedAt
 * @property ?string $fixedIn
 * @property string $ghsaId
 * @property int $id
 * @property string $nodeId
 * @property int $number
 * @property string $severity
 * @property string $state
 */
interface WebhooksAlert
{
}
