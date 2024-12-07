<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Changes\Login;
use ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed\Changes\Slug;

/**
 * @property ?Login $login
 * @property ?Slug $slug
 */
interface Changes
{
}
