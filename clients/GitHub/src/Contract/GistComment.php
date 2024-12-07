<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property string $body
 * @property ?SimpleUser $user
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $authorAssociation
 */
interface GistComment
{
}
