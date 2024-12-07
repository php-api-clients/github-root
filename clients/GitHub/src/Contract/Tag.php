<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Tag\Commit;

/**
 * @property string $name
 * @property Commit $commit
 * @property string $zipballUrl
 * @property string $tarballUrl
 * @property string $nodeId
 */
interface Tag
{
}
