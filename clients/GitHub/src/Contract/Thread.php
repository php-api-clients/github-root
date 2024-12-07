<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $id
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property \ApiClients\Client\GitHub\Schema\Thread\Subject $subject
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
