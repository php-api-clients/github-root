<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\Thread\Subject;

/**
 * @property string $id
 * @property MinimalRepository $repository
 * @property Subject $subject
 * @property string $reason
 * @property bool $unread
 * @property string $updatedAt
 * @property ?string $lastReadAt
 * @property string $url
 * @property string $subscriptionUrl
 */
interface Thread
{
}
