<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksSponsorship\Maintainer;
use ApiClients\Client\GitHub\Schema\WebhooksSponsorship\Sponsor;
use ApiClients\Client\GitHub\Schema\WebhooksSponsorship\Sponsorable;
use ApiClients\Client\GitHub\Schema\WebhooksSponsorship\Tier;

/**
 * @property string $createdAt
 * @property ?Maintainer $maintainer
 * @property string $nodeId
 * @property string $privacyLevel
 * @property ?Sponsor $sponsor
 * @property ?Sponsorable $sponsorable
 * @property Tier $tier
 */
interface WebhooksSponsorship
{
}
