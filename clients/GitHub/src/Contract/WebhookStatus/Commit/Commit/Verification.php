<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Commit;

/**
 * @property ?string $payload
 * @property string $reason
 * @property ?string $signature
 * @property bool $verified
 * @property ?string $verifiedAt
 */
interface Verification
{
}
